<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\AuthMail;
use App\Models\Konselor;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function indexlogin()
    {
        return view("login");
    }
    public function indexregister()
    {
        return view("register");
    }

    public function indexloginKonselor()
    {
        return view("loginKonselor");
    }
    public function indexregisterKonselor()
    {
        return view("registerKonselor");
    }

    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);

        $infoLogin=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::guard('web')->attempt($infoLogin)){
            return redirect()->intended(route('homeUser'))->with('success','Halo user, Anda berhasil login');
        } else if(Auth::guard('konselor')->attempt($infoLogin)){
            return redirect()->intended(route('homeKonselor'))->with('success','Halo konselor, Anda berhasil login');
        } else if(Auth::guard('admin')->attempt($infoLogin)){
            return redirect()->intended(route('homeAdmin'))->with('success','Halo admin, Anda berhasil login');
        } else {
            return redirect()->route('login')->withErrors('Email atau Password salah');
        };
    }

    // function loginKonselor(Request $request){
    //     $request->validate([
    //         'emailKonselor'=>'required',
    //         'passwordKonselor'=>'required',
    //     ],[
    //         'emailKonselor.required'=>'Email wajib diisi',
    //         'passwordKonselor.required'=>'Password wajib diisi',
    //     ]);

    //     $infoLogin=[
    //         'email'=>$request->emailKonselor,
    //         'password'=>$request->passwordKonselor,
    //     ];

    //     if(Auth::guard('konselor')->attempt($infoLogin)){
    //         return redirect()->route('homeKonselor')->with('success','Halo konselor, Anda berhasil login');
           
    //     }else{
    //         return redirect()->route('auth')->withErrors('Email atau Password salah');
    //     };
    // }

    public function actionRegisterKonselor(Request $request){
        $request->validate([
            'namaKonselor'=>'required|min:5',
            'email'=>'required|unique:konselors|unique:users|email',
            'password'=>'required|min:6',
            'jkKonselor'=>'required',
            'tgllahirKonselor'=>'required',
            'telpKonselor'=>'required|min:9',  
            'scanKTPKonselor'=>'required|image|file',
            'scanSertifKonselor'=>'required|image|file',
            'scanFotoKonselor'=>'required|image|file',
            'deskripsiKonselor'=>'required',
        ],[
            'namaKonselor.required'=>'Full Name wajib diisi',
            'namaKonselor.min'=>'Full Name minimal 5 karakter',
            'password.required'=>'Password wajib diisi',
            'password.min'=>'Password minimal 6 karakter',
            'email.required'=>'Email wajib diisi',
            'email.unique'=>'Email wajib unik',
            'tgllahirKonselor.required'=>'Tanggal wajib diisi',
            'telpKonselor.required'=>'Nomor telepon wajib diisi',
            'telpKonselor.min'=>'Nomor telepon minimal 9 angka',
            'deskripsiKonselor.required'=>'Deskripsi wajib diisi',

            'scanKTPKonselor.required'=>'KTP wajib diisi',
            'scanKTPKonselor.image'=>'KTP wajib berupa image',
            'scanKTPKonselor.file'=>'KTP wajib berupa file',

            'scanSertifKonselor.required'=>'Sertif wajib diisi',
            'scanSertifKonselor.image'=>'Sertif wajib berupa image',
            'scanSertifKonselor.file'=>'Sertif wajib berupa file',

            'scanFotoKonselor.required'=>'Foto wajib diisi',
            'scanFotoKonselor.image'=>'Foto wajib berupa image',
            'scanFotoKonselor.file'=>'Foto wajib berupa file',
        ]);

        //simpan scan KTP
        $ktp_file = $request->file('scanKTPKonselor');
        $ktp_ekstensi=$ktp_file->extension();
        $nama_ktp="ktp".date('ymdhis').".".$ktp_ekstensi;
        $ktp_file->move(public_path('picture/ktpKonselor'),$nama_ktp);

        //simpan scan sertif
        $sertif_file = $request->file('scanSertifKonselor');
        $sertif_ekstensi=$sertif_file->extension();
        $nama_sertif="sertif".date('ymdhis').".".$sertif_ekstensi;
        $sertif_file->move(public_path('picture/sertifKonselor'),$nama_sertif);

        //simpan scan Foto
        $fotoKonselor_file = $request->file('scanFotoKonselor');
        $fotoKonselor_ekstensi=$fotoKonselor_file->extension();
        $nama_fotoKonselor="fotoKonselor".date('ymdhis').".".$fotoKonselor_ekstensi;
        $fotoKonselor_file->move(public_path('picture/fotoKonselor'),$nama_fotoKonselor);

        $infoRegister=[
            'namaKonselor'=>$request->namaKonselor,
            'email'=>$request->email,
            'deskripsiKonselor'=>$request->deskripsiKonselor,
            'password'=>Hash::make($request->password),
            'jkKonselor'=>$request->jkKonselor,
            'tgllahirKonselor'=>$request->tgllahirKonselor,
            'telpKonselor'=>$request->telpKonselor,
            'scanKTPKonselor'=>$nama_ktp,
            'scanSertifKonselor'=>$nama_sertif,
            'scanFotoKonselor'=>$nama_fotoKonselor,
            'statusAktivasi'=>0

        ];

        Konselor::create($infoRegister);

        // $details=[
        //     'name'=>$infoRegister['fullname_konselor'],
        //     'role'=>'konselor',
        //     'website'=>'SMTP Multi User',
        //     'datetime'=>date('Y-m-d H:i:s'),
        //     'url'=>'http://'. request()->getHttpHost()."/"."verifyKonselor/".$infoRegister['verify_key'],
        // ];

        // Mail::to($infoRegister['email'])->send(new AuthMail($details));

        return redirect()->route('loginKonselor')->with('success','Silahkan login sebagai Konselor');
    }

    public function actionRegisterUser(Request $request){
           
        $request->validate([
            'nama'=>'required|min:5',
            'email'=>'required|unique:users|unique:konselors|email',
            'password'=>'required|min:6',
            'jkUser'=>'required',
            'tgllahir'=>'required',
            'telp'=>'required|min:9',  
            'scanFoto'=>'required|image|file',
        ],[
            'nama.required'=>'Full Name wajib diisi',
            'nama.min'=>'Full Name minimal 5 karakter',
            'password.required'=>'Password wajib diisi',
            'password.min'=>'Password minimal 6 karakter',
            'email.required'=>'Email wajib diisi',
            'email.unique'=>'Email wajib unik',
            'jkUser.required'=>'Jenis kelamin wajib diisi',
            'tgllahir.required'=>'Tanggal wajib diisi',
            'telp.required'=>'Nomor telepon wajib diisi',
            'telp.min'=>'Nomor telepon minimal 9 angka',
            'scanFoto.required'=>'Foto wajib diisi',
            'scanFoto.image'=>'Foto wajib berupa image',
            'scanFoto.file'=>'Foto wajib berupa file',
        ]);
        //simpan scan KTP
        $fotoUser_file = $request->file('scanFoto');
        $fotoUser_ekstensi=$fotoUser_file->extension();
        $nama_fotoUser="fotoUser".date('ymdhis').".".$fotoUser_ekstensi;
        $fotoUser_file->move(public_path('picture/fotoUser'),$nama_fotoUser);
        $infoRegister=[
            'nama'=>$request->nama,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'jkUser'=>$request->jkUser,
            'tgllahir'=>$request->tgllahir,
            'telp'=>$request->telp,         
            'scanFoto'=>$nama_fotoUser,
        ];
        User::create($infoRegister);
        return redirect()->route('login')->with('success','Silahkan login sebagai User');
    }

    public function logoutUser(Request $request){
        $request->session()->flush();
        auth()->guard('web')->logout();
        return redirect('/');
    }

    public function logoutKonselor(Request $request){
        $request->session()->flush();
        auth()->guard('konselor')->logout();
        return redirect('/');
    }

    public function logoutAdmin(Request $request){
        $request->session()->flush();
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
