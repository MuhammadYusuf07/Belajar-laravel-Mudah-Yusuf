<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DosenController;
use App\Http\Controllers\PasienController;
use Illuminate\Auth\Middleware\Authenticate;
use \App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

Route::middleware([Authenticate::class])->group(function () {

    Route::resource('pasien', PasienController::class);
    Route::resource('matakuliah', MatakuliahController::class);
});




Route::get('mahasiswa', [MahasiswaController::class, 'index']);
Route::get('mahasiswa/create', [MahasiswaController::class, 'create']);

Route::get('dosen', [DosenController::class, 'index']);
Route::get('dosen/create', [DosenController::class, 'create']);

Route::get('profil', function () {
    return 'hello world';
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
