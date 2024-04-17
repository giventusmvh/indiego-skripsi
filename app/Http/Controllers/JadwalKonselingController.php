<?php

namespace App\Http\Controllers;

use App\Models\JadwalKonseling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Konselor;

class JadwalKonselingController extends Controller
{


    public function indexAllJK(){
        $jadwal_konseling = DB::table('jadwal_konselings')
        ->join('konselors', 'jadwal_konselings.id_konselor', '=', 'konselors.id')
        ->select('konselors.namaKonselor', 
                'konselors.scanFotoKonselor', 
                'jadwal_konselings.topik_konseling',
                'jadwal_konselings.tgl_konseling', 
                'jadwal_konselings.tipe_konseling',
                'jadwal_konselings.jam_konseling',
                'jadwal_konselings.id')
        ->where('jadwal_konselings.isBooked', false)
        ->get();

        return view('member.allKonselor', compact('jadwal_konseling'));
    }

   public function indexAddJK(){
    return view('konselor.addSchedule');
   }

   public function indexEditJK($id){
    $jk = JadwalKonseling::findOrFail($id);
    return view("konselor.editSchedule", compact('jk'));
    }

    public function indexBookingJK($id){
        $jk = JadwalKonseling::findOrFail($id);
        $konselor=Konselor::findorFail($jk->id_konselor);
        return view("member.bookingKonseling", compact('jk','konselor'));
    }

//    public function indexAllJK(){

//     $konselor = Auth::guard('konselor')->user();
//     $id_konselor = $konselor->id;
//     $jadwalKonselings = JadwalKonseling::where('id_konselor', $id_konselor)->get();
//     return view('konselor.homeKonselor',compact('jadwalKonselings'));
//    }




   public function actionAddJk(Request $request){

    $konselor = Auth::guard('konselor')->user();
    $status_konselor = $konselor->statusAktivasi;

    if($status_konselor === 1){
        $request->validate([
            'tgl_konseling'=>'required',
            'jam_konseling'=>'required',
            'topik_konseling'=>'required',
            'tipe_konseling'=>'required',
        ],[
            'tgl_konseling.required'=>'Tanggal Konseling wajib diisi',
            'jam_konseling.required'=>'Jam Konseling wajib diisi',
            'topik_konseling.required'=>'Topik Konseling wajib diisi',
            'tipe_konseling.required'=>'Tipe Konseling wajib diisi',
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
                'tipe_konseling'=>$request->tipe_konseling,
                'topik_konseling'=>$request->topik_konseling,
                'isBooked'=>0,
            ];
        
        
            JadwalKonseling::create($infoAddJK);
        
            return redirect()->route('homeKonselor')->with('success','Berhasil Menambah Data Jadwal Konseling');
        }
    }else{
        return redirect()->route('homeKonselor')->with('error','Anda belum diaktivasi oleh Admin');
    }
    
    
   }

   public function actionEditJk(Request $request, $id){
    
    $request->validate([
        'tgl_konseling'=>'required',
        'jam_konseling'=>'required',
        'topik_konseling'=>'required',
        'tipe_konseling'=>'required',
    ],[
        'tgl_konseling.required'=>'Tanggal Konseling wajib diisi',
        'jam_konseling.required'=>'Jam Konseling wajib diisi',
        'topik_konseling.required'=>'Topik Konseling wajib diisi',
        'tipe_konseling.required'=>'Tipe Konseling wajib diisi',
    ]);

    $user = Auth::guard('konselor')->user();
    $jk = JadwalKonseling::findOrFail($id);

    $duplicate = JadwalKonseling::where('id_konselor', $user->id)
    ->where('tgl_konseling', $request->tgl_konseling)
    ->where('jam_konseling', $request->jam_konseling)
    ->exists();

    if($duplicate){
        return redirect()->route('homeKonselor')->with('error','Gagal Mengganti Data Jadwal Konseling');
    }else{
      
        $jk->tgl_konseling = $request->input('tgl_konseling');
        $jk->jam_konseling = $request->input('jam_konseling');
        $jk->tipe_konseling = $request->input('tipe_konseling');
        $jk->topik_konseling = $request->input('topik_konseling');
        $jk->save();
    
        return redirect()->route('homeKonselor')->with('success','Berhasil Mengganti Data Jadwal Konseling');
    }
   }

   public function deleteJK($id)
    {
        try {
            $jadwalKonseling = JadwalKonseling::findOrFail($id);
            $jadwalKonseling->delete();
            return redirect()->route('homeKonselor')->with('success','Berhasil Menghapus Data Jadwal Konseling');
        } catch (\Exception $e) {
            return redirect()->route('homeKonselor')->with('error','Gagal Menghapus Data Jadwal Konseling');
        }
    }
}
