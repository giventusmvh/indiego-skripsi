<?php

namespace App\Http\Controllers;

use App\Models\BookingKonseling;
use App\Http\Requests\StoreBookingKonselingRequest;
use App\Http\Requests\UpdateBookingKonselingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\JadwalKonseling;


class BookingKonselingController extends Controller
{

   


  public function addBookingKonseling(Request $request, $id){

    $user = Auth::user();
    $jk = JadwalKonseling::findOrFail($id);

    if($jk->isBooked === 0){
        $request->validate([
            'buktiBayar'=>'required|image|file',
        ],[
            'buktiBayar.required'=>'Bukti Bayar wajib diisi',
            'buktiBayar.image'=>'Bukti Bayar wajib berupa image',
            'buktiBayar.file'=>'Bukti Bayar wajib berupa file',
            
        ]);

        $buktiBayar_file = $request->file('buktiBayar');
        $buktiBayar_ekstensi=$buktiBayar_file->extension();
        $nama_buktiBayar="buktiBayar".date('ymdhis').".".$buktiBayar_ekstensi;
        $buktiBayar_file->move(public_path('picture/buktiBayar'),$nama_buktiBayar);

        $infoAddBooking=[
            'id_jk'=>$jk->id,
            'id_member'=>$user->id,
            'buktiBayar'=>$nama_buktiBayar,
            'isPaid'=>0,
            'isDone'=>0,
            'isCancel'=>0,
        ];
        $jk->isBooked = 1;
        $jk->save();

    
        BookingKonseling::create($infoAddBooking);
        return redirect()->route('homeUser')->with('success','Berhasil booking, mohon tunggu konfirmasi pembayaran oleh admin');
        
    }else{
        return redirect()->route('homeUser')->with('error','Gagal booking karena jadwal tidak tersedia');
    }
  }
}
