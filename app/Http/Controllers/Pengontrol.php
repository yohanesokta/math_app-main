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

            return redirect()->intended('/login');
        }
    }

    // logout function

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    // Admin login Control

    public function adminLogin(){
        return view('auth.login-admin');
    }
    public function processAdminLogin(Request $request){
        $validate = $request->validate([
            "name" => "required",
            "password" => "required"
        ]);

        $validate['akses'] = 'guru';

        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            return redirect()->intended('/admin/menu');
        }else{
            return back()->with('err','Loh Kok Salah?');
        }

    }

    // Menu Control Admin

    public function adminMenuControl(){
        $guruToken = Auth::user()->guruTokens;
        $data = DB::table('users')->where("guruTokens",$guruToken)->where("akses","!=","guru")->get();
        $AllData = DB::table('users')->where("akses","!=","guru")->where("guruTokens","!=",$guruToken)->get();

        return view('admin.dashboard',[
            "self" => Auth::user(),
            "siswa" => $data,
            "public" => $AllData
        ]);

    }

    public function score(Request $request){
        $value = $request->input('score');
        DB::table('users')->where('id',Auth::user()->id)->update([
            "score"=> $value
        ]);
        return redirect('/home/finish');
    }
}
