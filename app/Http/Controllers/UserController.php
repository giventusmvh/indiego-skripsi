<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\Artikel;
use App\Models\Konselor;
use App\Models\JadwalKonseling;

class UserController extends Controller
{
    public function indexHomeUser(){
        $artikels=Artikel::all();

        return view("member.homeUser",compact('artikels'));
    }

    public function indexAllMap()
    {
        $konselor = Konselor::all();
        $user = Auth::user();
        return view('member.allKonselorMap', compact('konselor','user'));
    }

    public function indexDetailKonselorByMap($id){
        $konselor = Konselor::findOrFail($id);
        $id_konselor = $konselor->id;
        $jadwalKonselings = JadwalKonseling::where('id_konselor', $id_konselor)->get();
        return view('member.detailKonselor',compact('jadwalKonselings','konselor'));
    }

    public function profileUser(){

        $user = Auth::user();
        return view("member.profileUser",['user' => $user]);
    }

    public function indexEditProfileUser($id){
        $user = User::findOrFail($id);
        return view("member.editProfileUser", compact('user'));
    }

    public function indexEditPasswordUser($id){
        $user = User::findOrFail($id);
        return view("member.editPasswordUser", compact('user'));
    }

    public function updateProfileUser(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required|min:5',
            'telp'=>'required|min:9',  
            'alamat'=>'required',
            'scanFoto'=>'image|file',
            'latitudeUser'=>'required',
            'longitudeUser'=>'required',
        ],[
            'nama.required'=>'Full Name wajib diisi',
            'nama.min'=>'Full Name minimal 5 karakter',
            'alamat.required'=>'Alamat wajib diisi',
            'telp.required'=>'Nomor telepon wajib diisi',
            'telp.min'=>'Nomor telepon minimal 9 angka',
            'latitudeUser.required'=>'Latitude wajib diisi',
            'longitudeUser.required'=>'Longitude wajib diisi',
        ]);

        $user = User::findOrFail($id);

        if ($request->file('scanFoto')) {
           
               
                $file =public_path('picture/fotoUser/' .$user->scanFoto);
                unlink($file);
                Storage::delete($file);
                $foto_file = $request->file('scanFoto');
                $foto_ekstensi=$foto_file->extension();
                $nama_foto="foto".date('ymdhis').".".$foto_ekstensi;
                $foto_file->move(public_path('picture/foto'),$nama_foto);

                $user->scanFoto = $nama_foto;
                $user->nama = $request->input('nama');
                $user->telp = $request->input('telp');
                $user->alamat = $request->input('alamat');
                $user->latitudeUser = $request->input('latitudeUser');
                $user->longitudeUser = $request->input('longitudeUser');
                $user->save();

                return redirect()->route('profile')->with('success','Berhasil update profile');
            
        }else{
            $user->nama = $request->input('nama');
            $user->telp = $request->input('telp');
            $user->alamat = $request->input('alamat');
            $user->latitudeUser = $request->input('latitudeUser');
            $user->longitudeUser = $request->input('longitudeUser');
            $user->save();
    
            return redirect()->route('profileUser')->with('success','Berhasil update profile');
        }
       
    }

    public function updatePasswordUser(Request $request, $id)
    {
        $request->validate([
            'passwordLama'=>'required',
            'passwordBaru'=>'required',  
            
        ],[
            'passwordLama.required'=>'Password lama wajib diisi',
            'passwordBaru.required'=>'Password baru wajib diisi',
        ]);

        $user = User::findOrFail($id);

        if (Hash::check($request->input('passwordLama'), $user->password)) {
            // Old password matches, update the password
            $user->password = Hash::make($request->input('passwordBaru'));
            $user->save();
    
            return redirect()->route('profileUser')->with('success','Berhasil ganti password');
        }else{
            return redirect()->route('profileUser')->with('error','Gagal ganti password');
        }
       
    }

   
}
