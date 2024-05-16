<?php

namespace App\Http\Controllers;

use App\Models\Konselor;
use App\Http\Requests\StoreKonselorRequest;
use App\Http\Requests\UpdateKonselorRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\JadwalKonseling;
use Illuminate\Support\Facades\DB;

class KonselorController extends Controller
{
    public function indexHomeKonselor(Request $request){
        $tanggal = $request->input('tanggal');
        $topik1 = $request->input('topik1');
        $topik2 = $request->input('topik2');
        $topik3 = $request->input('topik3');
        $topik4 = $request->input('topik4');
        $tipe1 = $request->input('tipe1');
        $tipe2 = $request->input('tipe2');
        $bookingStatus = $request->input('bookingStatus');
        $paymentStatus = $request->input('paymentStatus');
        $completeStatus = $request->input('completeStatus');
        $konselor = Auth::guard('konselor')->user();
        $id_konselor = $konselor->id;
        $jadwalKonselings = DB::table('jadwal_konselings')
        ->leftJoin('booking_konselings', function($join) {
            $join->on('jadwal_konselings.id', '=', 'booking_konselings.id_jk')
                 ->where('booking_konselings.isCancel', 0);
        })
            ->leftJoin('users', 'users.id', '=', 'booking_konselings.id_member')
            ->leftJoin('reschedules', 'reschedules.id_bk', '=', 'booking_konselings.id')
            ->select('users.nama',
                    'jadwal_konselings.topik_konseling',
                    'jadwal_konselings.tgl_konseling', 
                    'jadwal_konselings.tipe_konseling',
                    'jadwal_konselings.jam_konseling',
                    'jadwal_konselings.id',
                    'jadwal_konselings.isBooked',
                    'jadwal_konselings.harga_konseling',
                    'booking_konselings.isPaid',
                    'booking_konselings.isDone',
                    'booking_konselings.isCancel',
                    'reschedules.tgl_ganti',
                    'reschedules.jam_ganti',
                    'reschedules.isConfirmed')
            ->orderBy('jadwal_konselings.tgl_konseling', 'desc')
            ->where('jadwal_konselings.id_konselor', $id_konselor);

            if ($tanggal) {
                $jadwalKonselings->where('jadwal_konselings.tgl_konseling',$tanggal);
            }
            if ($topik1 || $topik2 || $topik3 || $topik4) {
                $jadwalKonselings->where(function ($query) use ($topik1, $topik2, $topik3, $topik4) {
                    $query->where('jadwal_konselings.topik_konseling', $topik1)
                        ->orWhere('jadwal_konselings.topik_konseling', $topik2)
                        ->orWhere('jadwal_konselings.topik_konseling', $topik3)
                        ->orWhere('jadwal_konselings.topik_konseling', $topik4);
                });
            }
        
            if ($tipe1 || $tipe2) {
                $jadwalKonselings->where(function ($query) use ($tipe1, $tipe2) {
                    $query->where('jadwal_konselings.tipe_konseling', $tipe1)
                        ->orWhere('jadwal_konselings.tipe_konseling', $tipe2);
                });
            }

            if ($bookingStatus !== null) {
                $jadwalKonselings = $jadwalKonselings->where('isBooked', $bookingStatus);
            }
           
            if ($paymentStatus !== null) {
                $jadwalKonselings = $jadwalKonselings->where('isPaid', $paymentStatus);
            }
            if ($completeStatus !== null) {
                $jadwalKonselings = $jadwalKonselings->where('isDone', $completeStatus);
            }
        
            $jadwalKonselings = $jadwalKonselings->paginate(4);
        return view('konselor.homeKonselor',compact('jadwalKonselings'));
    }

    public function profileKonselor(){
        $user = Auth::guard('konselor')->user();
        return view("konselor.profileKonselor",['user' => $user]);
    }

    public function indexEditProfileKonselor($id){
        $konselor = Konselor::findOrFail($id);
        return view("konselor.editProfileKonselor", compact('konselor'));
    }

    public function indexEditPasswordKonselor($id){
        $konselor = Konselor::findOrFail($id);
        return view("konselor.editPasswordKonselor", compact('konselor'));
    }

    public function updateProfileKonselor(Request $request, $id)
    {
        $request->validate([
            'namaKonselor'=>'required|min:5',
            'telpKonselor'=>'required|min:9',  
            'alamatKonselor'=>'required',
            'scanFotoKonselor'=>'image|file',
            'latitudeKonselor'=>'required',
            'longitudeKonselor'=>'required',
            'deskripsiKonselor'=>'required',
        ],[
            'namaKonselor.required'=>'Full Name wajib diisi',
            'namaKonselor.min'=>'Full Name minimal 5 karakter',
            'alamatKonselor.required'=>'Alamat wajib diisi',
            'telpKonselor.required'=>'Nomor telepon wajib diisi',
            'telpKonselor.min'=>'Nomor telepon minimal 9 angka',
            'latitudeKonselor.required'=>'Latitude wajib diisi',
            'longitudeKonselor.required'=>'Longitude wajib diisi',
            'deskripsiKonselor.required'=>'Deskripsi wajib diisi',
        ]);

        $konselor = Konselor::findOrFail($id);

        if ($request->file('scanFotoKonselor')) {
           
               
                $file =public_path('picture/fotoKonselor/' .$konselor->scanFotoKonselor);
                unlink($file);
                Storage::delete($file);
                $fotoKonselor_file = $request->file('scanFotoKonselor');
                $fotoKonselor_ekstensi=$fotoKonselor_file->extension();
                $nama_fotoKonselor="fotoKonselor".date('ymdhis').".".$fotoKonselor_ekstensi;
                $fotoKonselor_file->move(public_path('picture/fotoKonselor'),$nama_fotoKonselor);

                $konselor->scanFotoKonselor = $nama_fotoKonselor;
                $konselor->namaKonselor = $request->input('namaKonselor');
                $konselor->telpKonselor = $request->input('telpKonselor');
                $konselor->alamatKonselor = $request->input('alamatKonselor');
                $konselor->latitudeKonselor = $request->input('latitudeKonselor');
                $konselor->longitudeKonselor = $request->input('longitudeKonselor');
                $konselor->deskripsiKonselor = $request->input('deskripsiKonselor');
                $konselor->save();

                return redirect()->route('profileKonselor')->with('success','Berhasil update profile');
            
        }else{
            $konselor->namaKonselor = $request->input('namaKonselor');
            $konselor->telpKonselor = $request->input('telpKonselor');
            $konselor->alamatKonselor = $request->input('alamatKonselor');
            $konselor->latitudeKonselor = $request->input('latitudeKonselor');
            $konselor->longitudeKonselor = $request->input('longitudeKonselor');
            $konselor->deskripsiKonselor = $request->input('deskripsiKonselor');
            $konselor->save();
    
            return redirect()->route('profileKonselor')->with('success','Berhasil update profile');
        }
       
    }

    public function updatePasswordKonselor(Request $request, $id)
    {
        $request->validate([
            'passwordLama'=>'required',
            'passwordBaru'=>'required',  
            
        ],[
            'passwordLama.required'=>'Password lama wajib diisi',
            'passwordBaru.required'=>'Password baru wajib diisi',
        ]);

        $konselor = Konselor::findOrFail($id);

        if (Hash::check($request->input('passwordLama'), $konselor->password)) {
            // Old password matches, update the password
            $konselor->password = Hash::make($request->input('passwordBaru'));
            $konselor->save();
    
            return redirect()->route('profileKonselor')->with('success','Berhasil ganti password');
        }else{
            return redirect()->route('profileKonselor')->with('error','Gagal ganti password');
        }
       
    }
}
