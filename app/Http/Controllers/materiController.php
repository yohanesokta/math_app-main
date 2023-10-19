<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class materiController extends Controller
{
    public function homepage(Request $request){
        return view('users.pembuka');
    }
    public function video(){
        return view('users.video-materi');
    }
}
