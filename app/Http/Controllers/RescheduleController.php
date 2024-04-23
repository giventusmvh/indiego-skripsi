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
    
       
}
