<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
    return view('layouts.app');
});

Route::group(['middeleware'=>'web'],function(){
    Route::view('signup','signup');
    Route::post('/register',[UserController::class,'register']);
    Route::view("signin", "login");
    Route::post('/login',[UserController::class,'login']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
