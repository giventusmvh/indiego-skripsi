<?php

namespace App\Http\Controllers;

use App\Models\Reschedule;
use App\Http\Requests\StoreRescheduleRequest;
use App\Http\Requests\UpdateRescheduleRequest;
use Illuminate\Support\Facades\DB;
use App\Models\JadwalKonseling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BookingKonseling;
use App\Models\CancelBooking;
use Illuminate\Support\Carbon;

class RescheduleController extends Controller
{

    public function indexKonselorRes(Request $request){
        $needAction = $request->input('needAction');
        $actionDone = $request->input('actionDone');
        $tanggal = $request->input('tanggal');
        $namaKonselor=$request->input('namaKonselor');
        $konselor = Auth::guard('konselor')->user();
        $reschedule = DB::table('reschedules')
            ->join('users', 'reschedules.id_member', '=', 'users.id')
            ->join('jadwal_konselings', 'jadwal_konselings.id', '=', 'reschedules.id_jk')

            ->select('reschedules.tgl_ganti', 
                    'reschedules.id', 
                    'reschedules.jam_ganti', 
                    'reschedules.isConfirmed', 
                    'reschedules.isRejected', 
                    'jadwal_konselings.topik_konseling',
                    'jadwal_konselings.tgl_konseling', 
                    'jadwal_konselings.tipe_konseling',
                    'jadwal_konselings.jam_konseling',
                    'jadwal_konselings.id as id_jk',
                    'users.nama',
                    
                    )
            ->where('jadwal_konselings.id_konselor', $konselor->id);
            if ($namaKonselor) {
                $reschedule->where('users.nama','like','%'.$namaKonselor.'%');
            }
            if ($tanggal) {
                $reschedule->where('jadwal_konselings.tgl_konseling',$tanggal);
            }
            if ($needAction !== null) {
                $reschedule = $reschedule->where(function($query) {
                    $query->where('isConfirmed', 0)
                          ->where('isRejected', 0);
                });
            }

            if ($actionDone !== null) {
                $reschedule = $reschedule->where(function ($query) {
                    $query->where('isConfirmed', 1)
                          ->orWhere('isRejected', 1);
                });
            }
           
            $reschedule = $reschedule->paginate(30);

            

            return view('konselor.konselorResList', compact('reschedule'));
    }


    public function indexAddReschedule($id){
        
        $bk = BookingKonseling::findOrFail($id);
        $res = Reschedule::where('id_bk', $bk->id)->first();
        $cancel = CancelBooking::where('id_bk', $bk->id)->first();
        $jk = JadwalKonseling::findOrFail($bk->id_jk);
        $tanggalKonseling = Carbon::parse($jk->tgl_konseling);
        $maxResDeadline = $tanggalKonseling->subDays(2);
        $currentDate = Carbon::now();
        if ($currentDate < $maxResDeadline){
            if($bk->isPaid == 0){
                return redirect()->route('profileUser')->with('error','Mohon menunggu konfirmasi pembayaran oleh admin');
            }else{
                if($res){
                    return redirect()->route('profileUser')->with('error','Sudah pernah mengajukan reschedule, tidak bisa reschedule lagi');
                }else if($cancel){
                    return redirect()->route('profileUser')->with('error','Sudah pernah mengajukan pembatalan,Tidak bisa mengajukan reschedule');
                }else{
                    return view("member.addReschedule", compact('jk','bk'));
                }
            }
        }else{
            return redirect()->route('profileUser')->with('error','Tanggal untuk batas mengajukan reschedule sudah terlewati');
        }
    }

    public function actionAddRes(Request $request, $id){
        $bk = BookingKonseling::findOrFail($id);
        $jk = JadwalKonseling::findOrFail($bk->id_jk);
        $user = Auth::user();
        $request->validate([
            'tgl_ganti'=>'required',
            'jam_ganti'=>'required',
           
        ],[
            'tgl_ganti.required'=>'Tanggal Konseling wajib diisi',
            'jam_ganti.required'=>'Jam Konseling wajib diisi',
        ]);      
        $infoAddRes=[
            'id_jk'=>$jk->id,
            'id_bk'=>$bk->id,
            'id_member'=>$user->id,
            'tgl_ganti'=>$request->tgl_ganti,
            'jam_ganti'=>$request->jam_ganti,
            'isConfirmed'=>0,
            'isRejected'=>0,
        ];   
        Reschedule::create($infoAddRes);
        return redirect()->route('profileUser')->with('success','Berhasil Mengajukan Reschedule');
       }

       public function confirmRes($id)
        {
            try {
                $res = Reschedule::findOrFail($id);
                // $jk = JadwalKonseling::findOrFail($res->id_jk);
                // $jk->tgl_konseling = $res->tgl_ganti;
                // $jk->save();
                $res->isConfirmed = 1;
                $res->save();
                    return redirect()->route('indexKonselorRes')->with('success','Berhasil Accept Reschedule');
            } catch (\Exception $e) {
                return redirect()->route('homeAdmin')->with('error','Aksi Gagal');
            }
        }

        public function rejectRes($id)
        {
            try {
                $res = Reschedule::findOrFail($id);
                $res->isRejected = 1;
                $res->save();
                    return redirect()->route('indexKonselorRes')->with('success','Berhasil Accept Reschedule');
            } catch (\Exception $e) {
                return redirect()->route('homeAdmin')->with('error','Aksi Gagal');
            }
        }
    
       
}
