<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Konselor;

class AdminController extends Controller
{
    public function indexHomeAdmin(){
        $konselor = Konselor::all();
        return view('admin.dashboardAdmin', compact('konselor'));
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

   
}
