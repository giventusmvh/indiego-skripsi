<?php

namespace App\Http\Controllers;

use App\Models\Reschedule;
use App\Http\Requests\StoreRescheduleRequest;
use App\Http\Requests\UpdateRescheduleRequest;
use Illuminate\Support\Facades\DB;
use App\Models\JadwalKonseling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $jk = JadwalKonseling::findOrFail($id);
        return view("member.addReschedule", compact('jk'));
    }

    public function actionAddRes(Request $request, $id){
        $jk = JadwalKonseling::findOrFail($id);
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
