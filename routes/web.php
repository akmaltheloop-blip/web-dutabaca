<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;

// Halaman Utama (Dashboard)
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Halaman Publikasi
Route::get('/publikasi', function () {
    return view('publikasi.index');
})->name('publikasi.index');

// Halaman Kirim Karya
Route::get('/kirim-karya', function () {
    return view('kirim-karya.index');
})->name('kirim-karya.index');

// Halaman Review
Route::get('/review', function () {
    return view('review.index');
})->name('review.index');

// Halaman Profil
Route::get('/profil', function () {
    return view('profil.index');
})->name('profil.index');

// Resource Route untuk Publications
Route::resource('publications', PublicationController::class);