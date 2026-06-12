<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublikasiController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('publikasi', PublikasiController::class);

Route::get('/kirim-karya', function () {
    return view('kirim-karya.index');
})->name('kirim-karya.index');

Route::get('/penilaian', function () {
    return view('penilaian.index');
})->name('penilaian.index');

Route::get('/profil', function () {
    return view('profil.index');
})->name('profil.index');