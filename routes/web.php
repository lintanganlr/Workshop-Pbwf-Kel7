<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\ForgotPasswordController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ArtikelController;

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

Route::get('/', function () {
    return view('artikel');
});

// login//
Route::get('login', [LoginController::class, 'create'])->name('login.create');
Route::get('login/login', [LoginController::class, 'create'])->name('login.create');
Route::get('login/forgot-password', [LoginController::class, 'password' ])->name('login.forgot-password');

// regis //
Route::get('regis', [RegisterController::class, 'formregis'])->name('regis.create');
Route::get('regis/login', [LoginController::class, 'create'])->name('login.create');

// home//
Route::get('/', function () {
    return view('home');
});

// about //
Route::get('about', function () {
    return view('about'); // 
});

// service //
Route::get('service', [ServiceController::class, 'index'])->name('service');
// Route::get('/service/dokter', function () {
//     return view('appoinment.dokter');
// });
Route::get('service.dokter', [ServiceController::class, 'formdokter'])->name('appoinment.dokter');
Route::get('service.perawat', [ServiceController::class, 'formperawat'])->name('appoinment.perawat');

// artikel //
Route::get('artikel', [ArtikelController::class, 'index'])->name('artikel.artikel');
Route::get('artikel.tampilan', [ArtikelController::class, 'baca'])->name('artikel.tampilan');

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
