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
Route::view('dashboard','dashboard');
Route::view('label','label');
Route::view('notification','notification');
Route::view('map-google','map-google');
Route::view('progress-bar','progress-bar');
Route::view('sample','sample');
Route::view('tabs','tabs');
Route::view('tooltip','tooltip');
Route::view('typography','typography');
Route::view('icon-themify','icon-themify');
Route::view('form-elements','form-elements');
Route::view('color','color');
Route::view('chart','chart');
Route::view('button','button');
Route::view('bs-basic-table','bs-basic-table');
Route::view('breadcrumb','breadcrumb');
Route::view('auth-sign-up','auth-sign-up');
Route::view('auth-normal-sign-in','auth-normal-sign-in');
Route::view('accordion','accordion');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
