<?php

namespace App\Http\Controllers;

use App\Models\Konselor;
use App\Http\Requests\StoreKonselorRequest;
use App\Http\Requests\UpdateKonselorRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KonselorController extends Controller
{
    public function indexHomeKonselor(){
        return view("konselor.homeKonselor");
    }

    public function profileKonselor(){
        $user = Auth::guard('konselor')->user();
        return view("konselor.profileKonselor",['user' => $user]);
    }

    public function indexEditProfileKonselor($id){
        $konselor = Konselor::findOrFail($id);
        return view("konselor.editProfileKonselor", compact('konselor'));
    }

    public function updateProfileKonselor(Request $request, $id)
    {
        $request->validate([
            'namaKonselor'=>'required|min:5',
            'telpKonselor'=>'required|min:9',  
            'alamatKonselor'=>'required',
            'scanFotoKonselor'=>'image|file',
            'latitudeKonselor'=>'required',
            'longitudeKonselor'=>'required',
        ],[
            'namaKonselor.required'=>'Full Name wajib diisi',
            'namaKonselor.min'=>'Full Name minimal 5 karakter',
            'alamatKonselor.required'=>'Alamat wajib diisi',
            'telpKonselor.required'=>'Nomor telepon wajib diisi',
            'telpKonselor.min'=>'Nomor telepon minimal 9 angka',
            'latitudeKonselor.required'=>'Latitude wajib diisi',
            'longitudeKonselor.required'=>'Longitude wajib diisi',
        ]);

        $konselor = Konselor::findOrFail($id);

        if ($request->file('scanFotoKonselor')) {
           
               
                $file =public_path('picture/fotoKonselor/' .$konselor->scanFotoKonselor);
                unlink($file);
                Storage::delete($file);
                $fotoKonselor_file = $request->file('scanFotoKonselor');
                $fotoKonselor_ekstensi=$fotoKonselor_file->extension();
                $nama_fotoKonselor="fotoKonselor".date('ymdhis').".".$fotoKonselor_ekstensi;
                $fotoKonselor_file->move(public_path('picture/fotoKonselor'),$nama_fotoKonselor);

                $konselor->scanFotoKonselor = $nama_fotoKonselor;
                $konselor->namaKonselor = $request->input('namaKonselor');
                $konselor->telpKonselor = $request->input('telpKonselor');
                $konselor->alamatKonselor = $request->input('alamatKonselor');
                $konselor->latitudeKonselor = $request->input('latitudeKonselor');
                $konselor->longitudeKonselor = $request->input('longitudeKonselor');
                $konselor->save();

                return redirect()->route('profileKonselor')->with('success','Silahkan login sebagai Konselor');
            
        }else{
            $konselor->namaKonselor = $request->input('namaKonselor');
            $konselor->telpKonselor = $request->input('telpKonselor');
            $konselor->alamatKonselor = $request->input('alamatKonselor');
            $konselor->latitudeKonselor = $request->input('latitudeKonselor');
            $konselor->longitudeKonselor = $request->input('longitudeKonselor');
            $konselor->save();
    
            return redirect()->route('profileKonselor')->with('success','Silahkan login sebagai Konselor');
        }
       
    }
}
