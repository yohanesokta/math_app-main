<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class SoalController extends Controller
{    
    public function remove_token(){
        DB::table('users')->where('name',Auth::user()->name)->update([
            'guruTokens'=>''
        ]);

        return redirect('/auth/addtoken');
    }
    public function home_soal(){
        $data = Http::post('https://hanz-math-api.vercel.app/api/get/soal?token='.Auth::user()->guruTokens)->object();
        return view('src.public.homeSoal',[
            'data' => $data
        ]);      
    }
    public function token_validation(Request $request){
        $data = Http::post('https://hanz-math-api.vercel.app/api/validation/token?token='.$request->token )->object();
        if ($data->response->count == 0){
            return back()->with('err','Token Tidak Ada');
        }else{
            DB::table('users')->where('id',Auth::user()->id)->update([
                "guruTokens"=> $request->token
            ]);
            return redirect('/public/home');
        }
    }
    public function home_materi(Request $request){
        $datas = Http::post('https://hanz-math-api.vercel.app/api/get/soal?token='.Auth::user()->guruTokens)->object();
        foreach($datas->response->data[0]->Soal as $data){
            if($data->id == $request->id){
                return view('src.public.Soal',[
                    'data' => $data
                ]);
            }
        }
    }
}