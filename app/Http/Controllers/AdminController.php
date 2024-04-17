<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Konselor;
use App\Models\BookingKonseling;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function indexHomeAdmin(){
        $konselor = Konselor::all();
        return view('admin.dashboardAdmin', compact('konselor'));
    }

    public function indexAllBK(){
        $bookings = DB::table('booking_konselings')
        ->join('users', 'booking_konselings.id_member', '=', 'users.id')
        ->join('jadwal_konselings', 'booking_konselings.id_jk', '=', 'jadwal_konselings.id')
        ->join('konselors', 'jadwal_konselings.id_konselor', '=', 'konselors.id')
        ->select('konselors.namaKonselor', 
                'users.nama',
                'jadwal_konselings.tgl_konseling', 
                'jadwal_konselings.tipe_konseling',
                'jadwal_konselings.jam_konseling',
                'booking_konselings.id',
                'booking_konselings.buktiBayar',
                'booking_konselings.isPaid',
                'booking_konselings.isDone',
                'booking_konselings.isCancel')
        ->get();
        return view('admin.listTransaksiBooking', compact('bookings'));
    }

    public function activateKonselor($id)
    {

        
        try {
            $konselor = Konselor::findOrFail($id);
            if($konselor->statusAktivasi === 1){
                $konselor->statusAktivasi = 0;
                $konselor->save();
                return redirect()->route('homeAdmin')->with('success','Berhasil Deaktivasi Konselor');
            }else if($konselor->statusAktivasi === 0){
                $konselor->statusAktivasi = 1;
                $konselor->save();
                return redirect()->route('homeAdmin')->with('success','Berhasil Aktivasi Konselor');
            }
        } catch (\Exception $e) {
            return redirect()->route('homeAdmin')->with('error','Aksi Gagal');
        }
    }

    public function approvePembayaran($id)
    {
        try {
            $bk = BookingKonseling::findOrFail($id);
            $bk->isPaid = 1;
            $bk->save();
            return redirect()->route('indexAllBK')->with('success','Berhasil Deaktivasi Konselor');
        } catch (\Exception $e) {
            return redirect()->route('indexAllBK')->with('error','Aksi Gagal');
        }
    }

   
}
