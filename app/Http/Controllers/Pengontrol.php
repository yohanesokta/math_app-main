<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Pengontrol extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function sign(){
        return view('auth.sign');

    }
    public function addtoken(){

            if(Auth::user()->guruTokens == null){
                return view('auth.guruToken');
            } else{
                return redirect('/home');
            }

    }
    public function fn_public_token(){
        DB::table('users')->where('name',Auth::user()->name)->update([
            'guruTokens'=>'PUBLIC'
        ]);
        return redirect('/home');
    }

    public function fn_token(Request $request){
        DB::table('users')->where('name',Auth::user()->name)->update([
            'guruTokens'=>$request->input('token')
        ]);
        return redirect('/home');
    }


    public function fn_login(Request $request){

        $validate = $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($validate)){
            $request->session()->regenerate();

            if(Auth::user()->guruTokens == null){
                return redirect()->intended('/auth/addtoken');
            } else{
                return redirect()->intended('/home');
            }


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

            $request->session()->flash('sucsess','pendaftaran berhasil');

            return redirect('/login');
        }
    }

    // logout function

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
