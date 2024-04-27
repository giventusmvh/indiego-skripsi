<?php

namespace App\Http\Controllers;

use App\Models\CancelBooking;
use App\Http\Requests\StoreCancelBookingRequest;
use App\Http\Requests\UpdateCancelBookingRequest;
use App\Models\BookingKonseling;
use App\Models\JadwalKonseling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CancelBookingController extends Controller
{
    public function addCancellation($id)
    {

        
        try {
            $bk = BookingKonseling::findOrFail($id);
            $infoAddCancel=[
                'id_bk'=>$bk->id,
                'isConfirmed'=>0,
            ];
            CancelBooking::create($infoAddCancel);
            return redirect()->route('profileUser')->with('success','Berhasil Mengajukan Pembatalan');
        } catch (\Exception $e) {
            return redirect()->route('profileUser')->with('error','Aksi Gagal');
        }
    }

    public function indexKonselorCancel(Request $request){
        $needAction = $request->input('needAction');
        $actionDone = $request->input('actionDone');
        $tanggal = $request->input('tanggal');
        $namaKonselor=$request->input('namaKonselor');
        $konselor = Auth::guard('konselor')->user();
        $cancel = DB::table('cancel_bookings')
            ->join('booking_konselings', 'booking_konselings.id', '=', 'cancel_bookings.id_bk')
            ->join('jadwal_konselings', 'jadwal_konselings.id', '=', 'booking_konselings.id_jk')
            ->join('users', 'booking_konselings.id_member', '=', 'users.id')
            ->select('cancel_bookings.isConfirmed', 
                    'cancel_bookings.isRejected',
                    'cancel_bookings.id',  
                    'jadwal_konselings.topik_konseling',
                    'jadwal_konselings.tgl_konseling', 
                    'jadwal_konselings.tipe_konseling',
                    'jadwal_konselings.jam_konseling',
                    'jadwal_konselings.id as id_jk',
                    'users.nama',
                    
                    )
            ->where('jadwal_konselings.id_konselor', $konselor->id);
            if ($namaKonselor) {
                $cancel->where('users.nama','like','%'.$namaKonselor.'%');
            }
            if ($tanggal) {
                $cancel->where('jadwal_konselings.tgl_konseling',$tanggal);
            }
            if ($needAction !== null) {
                $cancel = $cancel->where(function($query) {
                    $query->where('isConfirmed', 0)
                          ->where('isRejected', 0);
                });
            }

            if ($actionDone !== null) {
                $cancel = $cancel->where(function ($query) {
                    $query->where('isConfirmed', 1)
                          ->orWhere('isRejected', 1);
                });
            }
           
            $cancel = $cancel->paginate(30);

            

            return view('konselor.konselorCancelList', compact('cancel'));
    }

    public function confirmCancel($id)
        {
            try {
                $res = CancelBooking::findOrFail($id);

                $konselor = Auth::guard('konselor')->user();
                $bookingKonseling = BookingKonseling::findOrFail($res->id_bk);
                $jadwalKonseling= JadwalKonseling::findOrFail($bookingKonseling->id_jk);

                $bookingKonseling->isCancel = 1;
                $bookingKonseling->isPaid = 0;
                $bookingKonseling->save();

                $jadwalKonseling->isBooked = 0;
                $jadwalKonseling->save();
                
                $res->isConfirmed = 1;
                $res->save();
                    return redirect()->route('indexKonselorCancel')->with('success','Berhasil Accept Pembatalan');
            } catch (\Exception $e) {
                return redirect()->route('homeAdmin')->with('error','Aksi Gagal');
            }
        }

        public function rejectCancel($id)
        {
            try {
                $res = CancelBooking::findOrFail($id);
                $res->isRejected = 1;
                $res->save();
                    return redirect()->route('indexKonselorCancel')->with('success','Berhasil Reject Pembatalan');
            } catch (\Exception $e) {
                return redirect()->route('homeAdmin')->with('error','Aksi Gagal');
            }
        }
}
