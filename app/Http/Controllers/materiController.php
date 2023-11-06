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
    public function goQuiz(){
        return view('users.goQuiz');
    }
    public function quiz(){


        $Quests = [
            [
                "Soal" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, quisquam?",
                "Jawab" => [
                    "01" => "001",
                    "02" => "002",
                    "03" => "003",
                    "04" => "004",
                ],
                "kunci" => 1,
                "hid" => "01"
            ],
            [
                "Soal2" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, quisquam?",
                "Jawab" => [
                    "01" => "001",
                    "02" => "002",
                    "03" => "003",
                    "04" => "004",
                ],
                "kunci" => 1,
                'hid' => '01'
            ],
        ];

        return view('users.quiz',[
            "Quest" => $Quests
        ]);
    }
    public function finish(){
        return view('users.credits');
    }
}
