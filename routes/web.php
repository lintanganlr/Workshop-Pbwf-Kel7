<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\ForgotPasswordController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/regis', function () {
    return view('register');
});

// Login
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

// Registrasi
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

// Lupa Password
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

// Route::resource('satuan', SatuanController::Class);
// Route::get('satuan/index', [SatuanController::class, 'index'])->name('satuan.index');
// Route::get('satuan/create', [SatuanController::class, 'create'])->name('satuan.create');
// Route::post('satuan/createProcess', [SatuanController::class, 'createProcess'])->name('satuan.create');
// Route::post('satuan/satuan', [SatuanController::class, 'store'])->name('satuan.store');
// Route::get('satuan/{id}/edit', [SatuanController::class, 'edit'])->name('satuan.edit');
// Route::put('satuan/{id}', [SatuanController::class, 'update'])->name('satuann.update');
// Route::delete('satuan/{id}', [SatuanController::class, 'destroy'])->name('satuan.destroy');
