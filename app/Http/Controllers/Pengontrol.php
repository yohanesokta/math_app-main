<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Pengontrol extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function sign(){
        return view('auth.sign');
    }

    public function fn_login(Request $request){
        $validate = $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }else{
            return back()->with('err','Login Tidak Valid');
        }
    }

    // Sign

    public function fn_sign(Request $request){

        if ($request->password!== $request->usrPW2){
            return view('auth.sign',[
                'info' => true,
                'usrName'=>$request->usrName,
                'infoMessage'=> 'Password Berbeda',
                'infoType'=>'error'
            ]);
        }else{
            $validate = $request->validate([
                'name'=>'required|max:255|unique:users',
                'email'=>'required|email|unique:users',
                'password'=>'required'
            ]);

            $validate['password'] = Hash::make($validate['password']);

            User::create($validate);

            $request->session()->flash('sucsess','daftar berhasil , masuk yuk!');

            return redirect('/login');
        }
    }
}
