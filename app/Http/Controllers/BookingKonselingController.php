<?php

namespace App\Http\Controllers;

use App\Models\BookingKonseling;
use App\Http\Requests\StoreBookingKonselingRequest;
use App\Http\Requests\UpdateBookingKonselingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\JadwalKonseling;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Cache;

class BookingKonselingController extends Controller
{

    public function addBookingKonseling(Request $request, $id)
    {
        $user = Auth::user();
        
        try {
            // Start a database transaction
            DB::beginTransaction();
            
            // Lock the row for the duration of the transaction
            $jk = JadwalKonseling::where('id', $id)->lockForUpdate()->firstOrFail();

            if ($jk->isBooked === 0) {
                $request->validate([
                    'buktiBayar' => 'required|image|file',
                ], [
                    'buktiBayar.required' => 'Bukti Bayar wajib diisi',
                    'buktiBayar.image' => 'Bukti Bayar wajib berupa image',
                    'buktiBayar.file' => 'Bukti Bayar wajib berupa file',
                ]);

                $buktiBayar_file = $request->file('buktiBayar');
                $buktiBayar_ekstensi = $buktiBayar_file->extension();
                $nama_buktiBayar = "buktiBayar" . date('ymdhis') . "." . $buktiBayar_ekstensi;
                $buktiBayar_file->move(public_path('picture/buktiBayar'), $nama_buktiBayar);

                $infoAddBooking = [
                    'id_jk' => $jk->id,
                    'id_member' => $user->id,
                    'buktiBayar' => $nama_buktiBayar,
                    'isPaid' => 0,
                    'isDone' => 0,
                    'isCancel' => 0,
                    'byCredit' => 0
                ];

                $jk->isBooked = 1;
                $jk->save();

                BookingKonseling::create($infoAddBooking);

                // Commit the transaction
                DB::commit();

                return redirect()->route('indexAllJK')->with('success', 'Berhasil booking, mohon tunggu konfirmasi pembayaran oleh admin');
            } else {
                // Rollback the transaction
                DB::rollBack();

                return redirect()->route('indexAllJK')->with('error', 'Gagal booking, silahkan hubungi admin untuk keterangan lebih lanjut dengan tombol dibawah');
            }
        } catch (\Exception $e) {
            // Rollback the transaction in case of an exception
            DB::rollBack();

            return redirect()->route('indexAllJK')->with('error', 'Gagal booking, silahkan hubungi admin untuk keterangan lebih lanjut dengan tombol dibawah');
        }
    }

  public function addBookingbyCredit($id){

    $user = Auth::user();
    $creditUser = User::findOrFail($user->id);
    $jk = JadwalKonseling::findOrFail($id);
    if($jk->isBooked === 0){
        if($user->creditPoint >= $jk->harga_konseling){
            $infoAddBooking=[
                'id_jk'=>$jk->id,
                'id_member'=>$user->id,
                'buktiBayar'=>"Credit Point",
                'isPaid'=>1,
                'isDone'=>0,
                'isCancel'=>0,
                'byCredit'=>1,
            ];
            $creditUser->creditPoint = $creditUser->creditPoint - $jk->harga_konseling;
            $jk->isBooked = 1;
            $jk->save();
            $creditUser->save();
            BookingKonseling::create($infoAddBooking);
            return redirect()->route('indexAllJK')->with('success','Berhasil booking menggunakan Credit Point');
        }else{
            return redirect()->route('indexAllJK')->with('error','Gagal booking karena Credit Point tidak cukup');
        }

       
        
    }else{
        return redirect()->route('indexAllJK')->with('error','Gagal booking, silahkan hubungi admin untuk keterangan lebih lanjut dengan tombol dibawah');
    }
  }

  public function konselingDone($id)
        {
            try {
                $bk = BookingKonseling::findOrFail($id);
                $bk->isDone = 1;
                $bk->save();
                    return redirect()->route('profileUser')->with('success','Terimakasih, Anda berhasil menyelesaikan Konseling');
            } catch (\Exception $e) {
                return redirect()->route('profileUser')->with('error','Aksi Gagal');
            }
        }


//   public function showHistoryKonselingUser(){
       
//         return view('member.profileUser', compact('historyBookings'));
//   }
}
