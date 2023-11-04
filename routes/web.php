<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\ForgotPasswordController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// login//
Route::get('login', [LoginController::class, 'index']);
Route::post('/login/login', [LoginController::class, 'login']);
Route::get('login/forgot-password', [LoginController::class, 'password' ])->name('login.forgot-password');
Route::get('/login/logout', [LoginController::class, 'logout']);

// regis //
Route::get('regis', [RegisterController::class, 'register']);
Route::post('regis/register', [RegisterController::class, 'stores'])->name('regis/register');

// home//
Route::get('/', function () {
    return view('home');
});

// home 2 //
Route::get('/home2', function () {
    return view('home2');
});

// about //
Route::get('about', function () {
    return view('about'); //
});

// service //
Route::get('service', [ServiceController::class, 'index'])->name('service');
Route::get('service.dokter', [ServiceController::class, 'formdokter'])->name('appoinment.dokter');
Route::get('service.perawat', [ServiceController::class, 'formperawat'])->name('appoinment.perawat');

// artikel //
Route::get('artikel', [ArtikelController::class, 'index'])->name('artikel.artikel');
Route::get('artikel.tampilan', [ArtikelController::class, 'baca'])->name('artikel.tampilan');

// review //
Route::get('review', [ReviewController::class, 'index'])->name('review.index');
Route::get('review.create', [ReviewController::class, 'create'])->name('review.create');

// Tenaga Medis //
// Dokter //
Route::get('dokter', function () {
    return view('doctor'); //
});

// perawat //
Route::get('perawat', function () {
    return view('nurse'); //
});

// contact //
Route::get('contact', function () {
    return view('contact'); //
});





























// Lupa Password
// Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

// Route::resource('satuan', SatuanController::Class);
// Route::get('satuan/index', [SatuanController::class, 'index'])->name('satuan.index');
// Route::get('satuan/create', [SatuanController::class, 'create'])->name('satuan.create');
// Route::post('satuan/createProcess', [SatuanController::class, 'createProcess'])->name('satuan.create');
// Route::post('satuan/satuan', [SatuanController::class, 'store'])->name('satuan.store');
// Route::get('satuan/{id}/edit', [SatuanController::class, 'edit'])->name('satuan.edit');
// Route::put('satuan/{id}', [SatuanController::class, 'update'])->name('satuann.update');
// Route::delete('satuan/{id}', [SatuanController::class, 'destroy'])->name('satuan.destroy');
