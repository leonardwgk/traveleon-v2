<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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

//login
Route::get('/', function () {
    return redirect('login');
});
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login/validate', [AuthController::class, 'logvalidate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register/create', [AuthController::class, 'store']);

//user
Route::get('/user', [TiketController::class, 'index'])->middleware('auth');
Route::post('/user/pesan', [TiketController::class, 'store'])->middleware('auth');
Route::get('/user/account', [TiketController::class, 'daftar'])->middleware('auth');
Route::get('/user/wisata', [WisataController::class, 'indexuser']);
//detail tiket
Route::get('/detail/{id}', [TiketController::class, 'detail'])->middleware('auth');


//admin
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/admin/manage', [AdminController::class, 'manage'])->middleware('auth');
//edit akun
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->middleware('auth');
Route::put('/admin/update/{id}', [AdminController::class, 'update'])->middleware('auth');
Route::delete('/admin/manage/delete/{id}', [AdminController::class, 'delete'])->middleware('auth');
//approve tiket
Route::put('/admin/approve/{id}', [AdminController::class, 'approve'])->middleware('auth');
Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy'])->middleware('auth');

//wisata
Route::get('/admin/wisata', [WisataController::class, 'index'])->middleware('auth');
Route::post('/admin/wisata/store', [WisataController::class, 'store'])->middleware('auth');
Route::get('admin/wisata/edit/{id}', [WisataController::class, 'edit'])->middleware('auth');
Route::put('admin/wisata/update/{id}', [WisataController::class, 'update'])->middleware('auth');
Route::delete('admin/wisata/delete/{id}', [WisataController::class, 'delete'])->middleware('auth');


Route::get('/logout', [AuthController::class, 'logout']);
