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

Route::get('/review', function () {
    return view('review.index');
})->name('review.index');

Route::get('/profil', function () {
    return view('profil.index');
})->name('profil.index');