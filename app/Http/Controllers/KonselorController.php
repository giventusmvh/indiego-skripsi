<?php

namespace App\Http\Controllers;

use App\Models\Konselor;
use App\Http\Requests\StoreKonselorRequest;
use App\Http\Requests\UpdateKonselorRequest;
use Illuminate\Support\Facades\Auth;

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
}
