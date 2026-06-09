<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublikasiController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/publikasi/{kategori?}', function ($kategori = 'semua') {
    return view('publikasi.index', compact('kategori'));
})->name('publikasi.index');

Route::get('/kirim-karya', function () {
    return view('kirim-karya.index');
})->name('kirim-karya.index');

Route::get('/review', function () {
    return view('review.index');
})->name('review.index');

Route::resource('publikasi', PublikasiController::class);