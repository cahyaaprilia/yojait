<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboradadminController;
use App\Http\Controllers\DoneController;
use App\Http\Controllers\Form1Controller;
use App\Http\Controllers\Form2Controller;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexadminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginadminController;
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

Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about',[AboutController::class,'index'])->name('about');

Route::get('/activity',[ActivityController::class,'index'])->name('activity');

Route::get('/booking', [BookingController::class,'index'])->name('booking');

Route::get('/done', [DoneController::class,'index'])->name('done');

Route::get('/form',[FormController::class,'index'])->name('form');

Route::get('/form1', [Form1Controller::class,'index'])->name('form1');

Route::get('/form2', [Form2Controller::class,'index'])->name('form2');

Route::get('/kodepembayaran', [KodeController::class,'index'])->name('kodepembayaran');

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/postlogin', [LoginController::class,'postlogin']) ->name('postlogin');

Route::get('/nota',[NodeController::class,'index'])->name('nota');

Route::get('/pembayaran', [PembayaranController::class,'index'])->name('pembayaran');

Route::get('/process', [ProcessController::class,'index'])->name('process');

Route::get('/profile', [ProfilController::class,'index'])->name('profile');

Route::get('/signin', [SigninController::class,'index'])->name('signin');

Route::get('/wishlist',[WishlistController::class,'index'])->name('wishlist');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/new-register', [SigninController::class,'register'])->name('new-register');

Route::post('/create-booking', [BookingController::class, 'store'])->name('create-booking');

Route::get('/dashboard',[DashboradadminController::class,'admin'])->name('dashboard');


Route::get('/dashboard-user',[DashboradadminController::class,'user'])->name('dashboard-user');
Route::get('/dashboard-pesanan',[DashboradadminController::class,'pesan'])->name('dashboard-pesanan');
Route::get('/dashboard-history',[DashboradadminController::class,'history'])->name('dashboard-history');

Route::get('/view', [DashboradadminController::class,'view'])->name('view');


Route::get('/indexadmin', [IndexadminController::class, 'admin'])->name('indexadmin');
Route::get('/loginadmin', [LoginadminController::class, 'admin'])->name('loginadmin');
Route::post('/loginprocess', [LoginadminController::class,'loginprocess']) ->name('loginprocess');
Route::post('/logoutadmin', [LoginadminController::class, 'logoutadmin'])->name('logoutadmin');

Route::get('/pembayaran/{bookings}',[PembayaranController::class,'index'])->name('pembayaran.booking');
Route::get('/view/{bookings}',[DashboradadminController::class,'view'])->name('view.booking');
Route::post('/view/{id}/konfirmasi',[DashboradadminController::class,'edit'])->name('view.booking.edit');
Route::patch('/view/{id}/konfirmasi/edit',[DashboradadminController::class,'update'])->name('view.booking.update');
Route::get('/view/{id}/konfirmasi/hapus',[DashboradadminController::class,'delete'])->name('view.booking.delete');

Route::get('process',[DashboradadminController::class,'index'])->name('process');

