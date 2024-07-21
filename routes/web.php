<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MahasiswaController;
use \App\Http\Controllers\DosenController;

Route::get('mahasiswa',[MahasiswaController::class,'index']);
Route::get('mahasiswa/create',[MahasiswaController::class,'create']);

Route::get('dosen',[DosenController::class,'index']);
Route::get('dosen/create',[DosenController::class,'create']);

Route::get('profil', function () {
    return 'hello world';
});

Route::get('/', function () {
    return view('welcome');
});
