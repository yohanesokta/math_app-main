<?php

use App\Http\Controllers\materiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pengontrol;
use App\Http\Controllers\SoalController;
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

Route::get('/', function () {
    return view('home');
})->middleware('guest');
Route::get('/logout', [Pengontrol::class, 'logout']);
Route::get('/login', [Pengontrol::class, 'login'])->middleware('guest')->name('login');
Route::get('/sign', [Pengontrol::class, 'sign'])->middleware('guest');
Route::get('/auth/addtoken', [Pengontrol::class, 'addToken'])->middleware('auth');
Route::post('/auth/addtoken', [Pengontrol::class, 'fn_token'])->middleware('auth');
Route::get('/auth/publictoken', [Pengontrol::class, 'fn_public_token'])->middleware('auth');
Route::get('/menu', function () {
    return view('users.menu');
})->middleware('auth');

Route::get('/admin/menu', [Pengontrol::class, 'adminMenuControl'])->middleware('auth');

Route::get('/admin/login', [Pengontrol::class, 'adminLogin']);
Route::post('/admin/login', [Pengontrol::class, 'processAdminLogin']);

Route::get('/home/goQuiz/first', [materiController::class, 'quiz'])->middleware('auth');
Route::get('/Score', [Pengontrol::class, 'score'])->middleware('auth');
Route::get('/home', [materiController::class, 'homepage'])->middleware('auth');
Route::get('/home/video', [materiController::class, 'video'])->middleware('auth');
Route::get('/home/goQuiz', [materiController::class, 'goQuiz'])->middleware('auth');
Route::get('/home/finish', [materiController::class, 'finish'])->middleware('auth');



Route::post('/login', [Pengontrol::class, 'fn_login'])->middleware('guest');
Route::post('/sign', [Pengontrol::class, 'fn_sign'])->middleware('guest');

Route::get('/public/home', [SoalController::class,'home_soal'])->middleware('auth');
Route::get('/public/materi',[SoalController::class,'home_materi'])->middleware('auth');
Route::post('/auth/token/validation',[SoalController::class,'token_validation'])->middleware('auth');
Route::get('/auth/removetoken',[SoalController::class,'remove_token'])->middleware('auth');