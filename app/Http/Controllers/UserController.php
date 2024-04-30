<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\Artikel;
use App\Models\Konselor;
use App\Models\JadwalKonseling;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function indexHomeUser(){
        $artikels=Artikel::all();

        return view("member.homeUser",compact('artikels'));
    }

    public function indexAllMap()
    {
        $konselor = Konselor::all();
        $user = Auth::user();
        return view('member.allKonselorMap', compact('konselor','user'));
    }

    public function indexDetailKonselorByMap($id){
        $konselor = Konselor::findOrFail($id);
        $id_konselor = $konselor->id;
        $jadwalKonselings = JadwalKonseling::where('id_konselor', $id_konselor)->get();
        return view('member.detailKonselor',compact('jadwalKonselings','konselor'));
    }

    public function profileUser(Request $request){

        $user = Auth::user();
        $resStatus = $request->input('resStatus');
        $resStatus2 = $request->input('resStatus2');
        $resStatus3 = $request->input('resStatus3');
        $cancelStatus = $request->input('cancelStatus1');
        $cancelStatus2 = $request->input('cancelStatus2');
        $cancelStatus3 = $request->input('cancelStatus3');
        $tanggal = $request->input('tanggal');
        $namaKonselor=$request->input('namaKonselor');
        $historyBookings = DB::table('booking_konselings')
        ->join('users', 'booking_konselings.id_member', '=', 'users.id')
        ->join('jadwal_konselings', 'booking_konselings.id_jk', '=', 'jadwal_konselings.id')
        ->join('konselors', 'jadwal_konselings.id_konselor', '=', 'konselors.id')
        ->leftJoin('reschedules', 'jadwal_konselings.id', '=', 'reschedules.id_jk')
        ->leftJoin('cancel_bookings', 'booking_konselings.id', '=', 'cancel_bookings.id_bk')
        ->select('konselors.namaKonselor', 
                'jadwal_konselings.topik_konseling',
                'jadwal_konselings.tgl_konseling', 
                'jadwal_konselings.tipe_konseling',
                'jadwal_konselings.jam_konseling',
                'jadwal_konselings.id',
                'reschedules.isConfirmed',
                'reschedules.isRejected',
                'booking_konselings.isPaid',
                'booking_konselings.id as idBooking',
                'cancel_bookings.isConfirmed as isCancelConfirmed',
                'cancel_bookings.isRejected as isCancelRejected');
                
                if ($namaKonselor) {
                    $historyBookings->where('konselors.namaKonselor','like','%'.$namaKonselor.'%');
                }
                if ($tanggal) {
                    $historyBookings->where('historyBookings.tgl_konseling',$tanggal);
                }
               
                $historyBookings =$historyBookings->where('booking_konselings.id_member', $user->id);
                $historyBookings = $historyBookings->get();

        return view("member.profileUser",compact('user','historyBookings'));
    }

    public function indexEditProfileUser($id){
        $user = User::findOrFail($id);
        return view("member.editProfileUser", compact('user'));
    }

    public function indexEditPasswordUser($id){
        $user = User::findOrFail($id);
        return view("member.editPasswordUser", compact('user'));
    }

    public function updateProfileUser(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required|min:5',
            'telp'=>'required|min:9',  
            'alamat'=>'required',
            'scanFoto'=>'image|file',
            'latitudeUser'=>'required',
            'longitudeUser'=>'required',
        ],[
            'nama.required'=>'Full Name wajib diisi',
            'nama.min'=>'Full Name minimal 5 karakter',
            'alamat.required'=>'Alamat wajib diisi',
            'telp.required'=>'Nomor telepon wajib diisi',
            'telp.min'=>'Nomor telepon minimal 9 angka',
            'latitudeUser.required'=>'Latitude wajib diisi',
            'longitudeUser.required'=>'Longitude wajib diisi',
        ]);

        $user = User::findOrFail($id);

        if ($request->file('scanFoto')) {
           
               
                $file =public_path('picture/fotoUser/' .$user->scanFoto);
                unlink($file);
                Storage::delete($file);
                $foto_file = $request->file('scanFoto');
                $foto_ekstensi=$foto_file->extension();
                $nama_foto="foto".date('ymdhis').".".$foto_ekstensi;
                $foto_file->move(public_path('picture/foto'),$nama_foto);

                $user->scanFoto = $nama_foto;
                $user->nama = $request->input('nama');
                $user->telp = $request->input('telp');
                $user->alamat = $request->input('alamat');
                $user->latitudeUser = $request->input('latitudeUser');
                $user->longitudeUser = $request->input('longitudeUser');
                $user->save();

                return redirect()->route('profile')->with('success','Berhasil update profile');
            
        }else{
            $user->nama = $request->input('nama');
            $user->telp = $request->input('telp');
            $user->alamat = $request->input('alamat');
            $user->latitudeUser = $request->input('latitudeUser');
            $user->longitudeUser = $request->input('longitudeUser');
            $user->save();
    
            return redirect()->route('profileUser')->with('success','Berhasil update profile');
        }
       
    }

    public function updatePasswordUser(Request $request, $id)
    {
        $request->validate([
            'passwordLama'=>'required',
            'passwordBaru'=>'required',  
            
        ],[
            'passwordLama.required'=>'Password lama wajib diisi',
            'passwordBaru.required'=>'Password baru wajib diisi',
        ]);

        $user = User::findOrFail($id);

        if (Hash::check($request->input('passwordLama'), $user->password)) {
            // Old password matches, update the password
            $user->password = Hash::make($request->input('passwordBaru'));
            $user->save();
    
            return redirect()->route('profileUser')->with('success','Berhasil ganti password');
        }else{
            return redirect()->route('profileUser')->with('error','Gagal ganti password');
        }
       
    }

   
}
