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


        if ($request->usrPW !== $request->usrPW2){
            return view('auth.sign',[
                'info' => true,
                'usrName'=>$request->usrName,
                'infoMessage'=> 'Password Berbeda',
                'infoType'=>'error'
            ]);
        }else{
            return view('auth.login',[
                'info'=> true,
                'infoType'=>'message',
                'infoMessage'=>'daftar berhasil , yuk login!'
            ]);
        }
    }
}
