<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login',[Pengontrol::class,'login']);
Route::get('/sign',[Pengontrol::class,'sign']);


Route::post('/login',[Pengontrol::class,'fn_login']);
Route::post('/sign',[Pengontrol::class,'fn_sign']);

