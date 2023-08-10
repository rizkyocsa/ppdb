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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);

Auth::routes();

//Admin
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home')->middleware('is_admin');

//Master User
Route::get('admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('admin.user')->middleware('is_admin');
Route::get('/admin/user/ajax/data/{id}', [App\Http\Controllers\UserController::class, 'getData']);
Route::patch('admin/user/update', [App\Http\Controllers\UserController::class, 'update'])->name('admin.user.update')->middleware('is_admin');
//Master Pendaftaran
Route::get('admin/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'index'])->name('admin.pendaftaran')->middleware('is_admin');
Route::get('/admin/pendaftaran/ajax/data/{id}', [App\Http\Controllers\PendaftaranController::class, 'getData']);
Route::patch('admin/pendaftaran/update', [App\Http\Controllers\PendaftaranController::class, 'status_pendaftaran'])->name('pendaftaran.status')->middleware('is_admin');

//Master Pengumuman
Route::get('admin/pengumuman', [App\Http\Controllers\PostController::class, 'index'])->name('admin.pengumuman')->middleware('is_admin');
Route::patch('admin/pengumuman/update', [App\Http\Controllers\PostController::class, 'update'])->name('admin.pengumuman.update')->middleware('is_admin');

//User

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('is_user');
Route::get('/home/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'form_pendaftaran'])->name('user.pendaftaran')->middleware('is_user');
Route::post('/home/pendaftaran/create', [App\Http\Controllers\PendaftaranController::class, 'submit_pendaftaran'])->name('create.pendaftaran')->middleware('is_user');
Route::patch('/home/pendaftaran/update', [App\Http\Controllers\PendaftaranController::class, 'update_pendaftaran'])->name('create.pendaftaran.update')->middleware('is_user');