<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pengontrol extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function sign(){
        return view('auth.sign');
    }

    public function fn_login(Request $request){
        return ($request->usrName);
    }

    public function fn_sign(Request $request){

    }
}
