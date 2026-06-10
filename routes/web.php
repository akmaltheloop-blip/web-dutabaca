<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/publikasi', function () {
    return view('publikasi.index');
})->name('publikasi.index');

Route::get('/kirim-karya', function () {
    return view('kirim-karya.index');
})->name('kirim-karya.index');

Route::get('/penilaian', function () {
    return view('penilaian.index');
})->name('penilaian.index');

Route::get('/profil', function () {
    return view('profil.index');
})->name('profil.index');