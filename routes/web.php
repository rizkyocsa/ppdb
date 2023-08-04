<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

//Admin
Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');

Route::get('admin/registrasi', [App\Http\Controllers\RegistrasiController::class, 'index'])->name('admin.registrasi')->middleware('is_admin');
Route::patch('admin/registrasi/update', [App\Http\Controllers\RegistrasiController::class, 'lolos_registrasi'])->name('registrasi.lolos')->middleware('is_admin');
Route::get('/admin/registrasi/ajax/dataRegis/{id}', [App\Http\Controllers\RegistrasiController::class, 'getData']);

Route::get('admin/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('admin.mahasiswa')->middleware('is_admin');


//Mahasiswa
Route::get('mahasiswa/home', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa.home')->middleware('is_mahasiswa');


//User
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('is_user');
Route::get('/home/registrasi', [App\Http\Controllers\RegistrasiController::class, 'form_registrasi'])->name('user.registrasi')->middleware('is_user');
// Route::post('/home/registrasi/create', [App\Http\Controllers\RegistrasiController::class, 'submit_registrasi'])->name('create.registrasi')->middleware('is_user');
Route::post('/home/registrasi/create', [App\Http\Controllers\RegistrasiController::class, 'submit_pendaftaran'])->name('create.registrasi')->middleware('is_user');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('is_user');
Route::get('/home/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'form_pendaftaran'])->name('user.pendaftaran')->middleware('is_user');
Route::post('/home/pendaftaran/create', [App\Http\Controllers\PendaftaranController::class, 'submit_pendaftaran'])->name('create.pendaftaran')->middleware('is_user');

