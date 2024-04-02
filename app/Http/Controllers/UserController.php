<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function indexHomeUser(){
        return view("member.homeUser");
    }

    public function profileUser(){

        $user = Auth::user();
        return view("member.profileUser",['user' => $user]);
    }

   
}
