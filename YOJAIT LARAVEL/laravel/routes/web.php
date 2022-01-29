<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DoneController;
use App\Http\Controllers\Form1Controller;
use App\Http\Controllers\FormController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NodeController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\WishlistController;

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

Route::get('/index',[IndexController::class,'index']);
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/aboutus',[AboutController::class,'index']);

Route::get('/activity',[ActivityController::class,'index']);

Route::get('/booking', [BookingController::class,'index']);

Route::get('/done', [DoneController::class,'index']);

Route::get('/form',[FormController::class,'index']);

Route::get('/form1', [Form1Controller::class,'index']);

Route::get('/form2', [Form2Controller::class,'index']);

Route::get('/kodepembayaran', [KodeController::class,'index']);

Route::get('/login', function () {
    return view('user.login');
});
Route::post('/postlogin', [LoginController::class,'postlogin']) ->name('postlogin');

Route::get('/nota',[NodeController::class,'index']);

Route::get('/pembayaran', [PembayaranController::class,'index']);

Route::get('/process', [ProcessController::class,'index']);

Route::get('/profile', [ProfilController::class,'index']);

Route::get('/signin', [SigninController::class,'index']);

Route::get('/wishlist',[WishlistController::class,'index']);

