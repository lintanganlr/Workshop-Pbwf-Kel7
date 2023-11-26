<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\ForgotPasswordController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UploadArtController;
use App\Http\Controllers\TenagaMedisController;
use App\Http\Controllers\PasienController;

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
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::get('login/forgot-password', [LoginController::class, 'password'])->name('login.forgot-password');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// regis //
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::post('regis/register', [RegisterController::class, 'create'])->name('regis.register');
Route::post('/register', function (Request $request) {return redirect('/');})->name('register.submit');

// home//
Route::get('/', function () {
    return view('home');
});

// Route::get('/home', function () {
//     return view('home');
// });

// home 2 //
Route::get('/home2', function () {
    return view('home2');
});

// about //
Route::get('about', function () {
    return view('about');
});

// service //
Route::get('service', [ServiceController::class, 'index'])->name('service');
Route::get('service.dokter', [ServiceController::class, 'formdokter'])->name('appoinment.dokter');
Route::get('service.perawat', [ServiceController::class, 'formperawat'])->name('appoinment.perawat');

// artikel //
Route::get('artikel', [UploadArtController::class, 'tampilcust'])->name('artikel.index');
Route::get('artikel/{id}', [UploadArtController::class, 'show'])->name('article.show'); // Define route for showing a single article
Route::get('artikel/tampilan/{id}', [UploadArtController::class, 'tampilan'])->name('artikel.tampilan');

Route::get('artikel/tampilan', [UploadArtController::class, 'tampilan'])->name('artikel.tampilan');


// review //
Route::get('review', [ReviewController::class, 'index'])->name('review.index');
Route::get('review.create', [ReviewController::class, 'create'])->name('review.create');

// Tenaga Medis //
// Dokter //
Route::get('dokter', function () {
    return view('doctor');
});

// perawat //
Route::get('perawat', function () {
    return view('nurse');
});

// contact //
Route::get('contact', function () {
    return view('contact');
});


// admin //
Route::get('admin', function () {
    return view('admin.index');
});
Route::get('forms-basic-inputs.html', function () {
    return view('admin.formsbasicinputs');
});


Route::get('forms-input-groups.html', function () {
    return view('admin.formsinputgroups');
});

Route::get('form-layouts-vertical.html', function () {
    return view('admin.formlayoutsvertical');
});

Route::get('form-layouts-horizontal.html', function () {
    return view('admin.formlayoutshorizontal');
});
Route::get('tables-basic.html', function () {
    return view('admin.tablesbasic');
});


Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('list', function () {
    return view('admin.list');
});

// Route::get('review', function () {
//     return view('admin.review');
// });


Route::get('article', function () {
    return view('admin.article.index');
});

Route::get('article/create', function () {
    return view('admin.article.create');
});


Route::get('/article',[UploadArtController::class,'index'])->name('article.index');
Route::get('/article/create',[UploadArtController::class,'create'])->name('article.create');
Route::post('/article/store',[UploadArtController::class,'store'])->name('article.store');
Route::get('/article/edit/{id}',[UploadArtController::class,'edit'])->name('article.edit');
Route::put('/article/update/{id}',[UploadArtController::class,'update'])->name('article.update');
Route::delete('/article/delete/{id}',[UploadArtController::class,'destroy'])->name('article.destroy');
// Route::get('/article/trash',[UploadArticleontroller::class,'trash'])->name('article.trash');
// Route::put('/article/restore/{id}',[UploadArticleontroller::class,'restore'])->name('article.restore');
// Route::put('/article/restoreall',[UploadArticleontroller::class,'restoreall'])->name('article.restoreall');


// TENAGA MEDIS
Route::get('/tenagamedis',[TenagaMedisController::class,'index'])->name('tenagamedis.index');
Route::get('/tenagamedis/create',[TenagaMedisController::class,'create'])->name('tenagamedis.create');
Route::post('/tenagamedis/store',[TenagaMedisController::class,'store'])->name('tenagamedis.store');
Route::get('/tenagamedis/edit/{id}',[TenagaMedisController::class,'edit'])->name('tenagamedis.edit');
Route::put('/tenagamedis/update/{id}',[TenagaMedisController::class,'update'])->name('tenagamedis.update');
Route::delete('/tenagamedis/delete/{id}',[TenagaMedisController::class,'destroy'])->name('tenagamedis.destroy');
// Route::get('/article/trash',[TenagaMedisicleontroller::class,'trash'])->name('article.trash');
// Route::put('/article/restore/{id}',[TenagaMedisicleontroller::class,'restore'])->name('article.restore');
// Route::put('/article/restoreall',[TenagaMedisicleontroller::class,'restoreall'])->name('article.restoreall');


// Lupa Password
// Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('/password/reset', 'Auth\ResetPasswordController@reset');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//PEMBAYARAN//
Route::get('pembayaran', function () {
    return view('pembayaran');
});

//PROFILE CUSTOMER//
// Route::get('profile', function () {
//     return view('profile-user');
// });
Route::get('profile', [PasienController::class, 'index'])->name('index');
Route::get('/profile/create', [PasienController::class, 'create'])->name('profile.create');
Route::post('/simpan', [PasienController::class, 'simpan']);

// INDAH //
// TES COBA ISO GA //


Route::get('/service/main',[ServiceController::class,'main'])->name('service.main');
Route::get('/service/create',[ServiceController::class,'create'])->name('service.create');
Route::post('/service/store',[ServiceController::class,'store'])->name('service.store');
Route::get('/service/edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
Route::put('/service/update/{id}',[ServiceController::class,'update'])->name('service.update');
Route::delete('/service/delete/{id}',[ServiceController::class,'destroy'])->name('service.destroy');
// Route::get('/service/trash',[Uploadserviceontroller::class,'trash'])->name('service.trash');
// Route::put('/service/restore/{id}',[Uploadserviceontroller::class,'restore'])->name('service.restore');
// Route::put('/service/restoreall',[Uploadserviceontroller::class,'restoreall'])->name('service.restoreall');






























// //
