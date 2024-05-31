<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Konselor;
use App\Models\BookingKonseling;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function indexHomeAdmin(Request $request){
        $konselor = Konselor::query();
        $activeStatus = $request->input('activeStatus');
        $namaKonselor=$request->input('namaKonselor');
        // Check if the status filter is provided in the request
        if ($request->has('activeStatus')) {
            $konselor->where('statusAktivasi', $activeStatus);
        }

        if ($request->has('namaKonselor')) {
            $konselor->where('namaKonselor','like','%'.$namaKonselor.'%');
        }
    
        // Get the final result
        $konselor = $konselor->get();
        return view('admin.dashboardAdmin', compact('konselor'));
    }

    public function indexAllMember(Request $request){
        $member = User::query();
        $nama=$request->input('nama');
        // Check if the status filter is provided in the request

        if ($request->has('nama')) {
            $member->where('nama','like','%'.$nama.'%');
        }
    
        // Get the final result
        $member = $member->get();
        return view('admin.listMember', compact('member'));
    }

    public function indexAllBK(Request $request){

        $paymentStatus = $request->input('paymentStatus');
        $cancelCheck = $request->input('cancelCheck');
        $tanggal = $request->input('tanggal');
        $namaKonselor=$request->input('namaKonselor');
        $nama=$request->input('nama');

        $bookings = DB::table('booking_konselings')
        ->join('users', 'booking_konselings.id_member', '=', 'users.id')
        ->join('jadwal_konselings', 'booking_konselings.id_jk', '=', 'jadwal_konselings.id')
        ->join('konselors', 'jadwal_konselings.id_konselor', '=', 'konselors.id')
        ->leftJoin('cancel_bookings', 'cancel_bookings.id_bk', '=', 'booking_konselings.id')
        ->select('konselors.namaKonselor', 
                'users.nama',
                'jadwal_konselings.tgl_konseling', 
                'jadwal_konselings.tipe_konseling',
                'jadwal_konselings.jam_konseling',
                'jadwal_konselings.harga_konseling',
                'booking_konselings.id',
                'booking_konselings.buktiBayar',
                'booking_konselings.isPaid',
                'booking_konselings.isDone',
                'booking_konselings.isCancel','booking_konselings.created_at')
        ->orderBy('booking_konselings.created_at', 'desc');
                if ($namaKonselor) {
                    $bookings->where('konselors.namaKonselor','like','%'.$namaKonselor.'%');
                }
                if ($nama) {
                    $bookings->where('users.nama','like','%'.$nama.'%');
                }
         if ($cancelCheck !== null) {
                $bookings = $bookings->where('isCancel', $cancelCheck);
            }
           
            if ($paymentStatus !== null) {
                $bookings = $bookings->where('isPaid', $paymentStatus)
                ->where('isCancel', 0);
            }
           
        
            $bookings = $bookings->get();
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

    public function resetMemberPassword($id)
    {
        try {
            $member= User::findOrFail($id);
            $member->password = Hash::make('indiegomember');
            $member->save();
            return redirect()->route('indexAllMember')->with('success','Berhasil reset password member');
        } catch (\Exception $e) {
            return redirect()->route('indexAllMember')->with('error','Aksi Gagal');
        }
    }

    public function resetKonselorPassword($id)
    {
        try {
            $konselor= Konselor::findOrFail($id);
            $konselor->password = Hash::make('indiegokonselor');
            $konselor->save();
            return redirect()->route('homeAdmin')->with('success','Berhasil reset password konselor');
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
