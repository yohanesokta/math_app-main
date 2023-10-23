<?php

use App\Http\Controllers\materiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pengontrol;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('home');
})->middleware('guest');
Route::get('/logout',[Pengontrol::class,'logout']);
Route::get('/login',[Pengontrol::class,'login'])->middleware('guest')->name('login');
Route::get('/sign',[Pengontrol::class,'sign'])->middleware('guest');
Route::get('/auth/addtoken',[Pengontrol::class,'addToken'])->middleware('auth');
Route::post('/auth/addtoken',[Pengontrol::class,'fn_token'])->middleware('auth');
Route::get('/auth/publictoken',[Pengontrol::class,'fn_public_token'])->middleware('auth');

Route::get('/home/goQuiz/first',[materiController::class,'quiz'])->middleware('auth');

Route::get('/home',[materiController::class,'homepage'])->middleware('auth');
Route::get('/home/video',[materiController::class,'video'])->middleware('auth');
Route::get('/home/goQuiz',[materiController::class,'goQuiz'])->middleware('auth');


Route::post('/login',[Pengontrol::class,'fn_login'])->middleware('guest');
Route::post('/sign',[Pengontrol::class,'fn_sign'])->middleware('guest');
