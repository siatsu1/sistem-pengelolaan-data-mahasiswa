<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;






Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('prosesregistrasi', [AuthController::class, 'prosesregistrasi']);
Route::post('proseslogin', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);



Route::prefix('admin')->middleware('auth')->group(function () {

    // beranda
    Route::get('beranda', [AuthController::class, 'beranda']);

    // produk
    Route::get('mahasiswa', [MahasiswaController::class, 'index']);
    Route::get('mahasiswa/detail/{id}', [MahasiswaController::class, 'detail']);
    Route::get('mahasiswa/create', [MahasiswaController::class, 'create']);
    Route::post('mahasiswa/store', [MahasiswaController::class, 'store']);
    Route::get('mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
    Route::put('mahasiswa/edit/store/{id}', [MahasiswaController::class, 'update']);
    Route::delete('mahasiswa/delete/{id}', [MahasiswaController::class, 'delete']);
 
});




