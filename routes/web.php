<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

// Route resource untuk Prodi dan Mahasiswa
Route::resource('prodis', ProdiController::class);
Route::resource('mahasiswas', MahasiswaController::class);
