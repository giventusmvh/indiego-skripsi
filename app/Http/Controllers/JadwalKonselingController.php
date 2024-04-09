<?php

namespace App\Http\Controllers;

use App\Models\JadwalKonseling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class JadwalKonselingController extends Controller
{
   public function indexAddJK(){
    return view('konselor.addSchedule');
   }

   public function actionAddJk(Request $request){
    
    $request->validate([
        'tgl_konseling'=>'required',
        'jam_konseling'=>'required',
        'topik_konseling'=>'required',
    ],[
        'tgl_konseling.required'=>'Tanggal Konseling wajib diisi',
        'jam_konseling.required'=>'Jam Konseling wajib diisi',
        'topik_konseling.required'=>'Topik Konseling wajib diisi',
    ]);

    $user = Auth::guard('konselor')->user();

    $duplicate = JadwalKonseling::where('id_konselor', $user->id)
    ->where('tgl_konseling', $request->tgl_konseling)
    ->where('jam_konseling', $request->jam_konseling)
    ->exists();

    if($duplicate){
        return redirect()->route('homeKonselor')->with('error','Gagal Menambah Data Jadwal Konseling');
    }else{
        $infoAddJK=[
            'id_konselor'=>$user->id,
            'tgl_konseling'=>$request->tgl_konseling,
            'jam_konseling'=>$request->jam_konseling,
            'topik_konseling'=>$request->topik_konseling,
            'isBooked'=>0,
            
           
    
        ];
    
    
        JadwalKonseling::create($infoAddJK);
    
        return redirect()->route('homeKonselor')->with('success','Berhasil Menambah Data Jadwal Konseling');
    }

    
   }
}
