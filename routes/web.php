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
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/user', [TiketController::class, 'index']);
    Route::post('/user/pesan', [TiketController::class, 'store']);
    Route::get('/user/account', [TiketController::class, 'daftar']);
    Route::get('/user/wisata', [WisataController::class, 'indexuser']);
    //detail tiket
    Route::get('/detail/{id}', [TiketController::class, 'detail']);
});


//admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/manage', [AdminController::class, 'manage']);
    //edit akun
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
    Route::put('/admin/update/{id}', [AdminController::class, 'update']);
    Route::delete('/admin/manage/delete/{id}', [AdminController::class, 'delete']);
    //approve tiket
    Route::put('/admin/approve/{id}', [AdminController::class, 'approve']);
    Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy']);

    //wisata
    Route::get('/admin/wisata', [WisataController::class, 'index']);
    Route::post('/admin/wisata/store', [WisataController::class, 'store']);
    Route::get('/admin/wisata/edit/{id}', [WisataController::class, 'edit']);
    Route::put('/admin/wisata/update/{id}', [WisataController::class, 'update']);
    Route::delete('/admin/wisata/delete/{id}', [WisataController::class, 'delete']);
});


Route::get('/logout', [AuthController::class, 'logout']);
