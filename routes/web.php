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

Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('mahasiswa/home', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa.home')->middleware('is_mahasiswa');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
