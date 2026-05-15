<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

/*
|--------------------------------------------------------------------------
| Route sementara untuk halaman yang dikerjakan teman
|--------------------------------------------------------------------------
*/
Route::get('/publikasi', function () {
    return '<h1 style="font-family:sans-serif;padding:40px;">Halaman Publikasi </h1>';
})->name('publikasi.index');

Route::get('/kirim-karya', function () {
    return '<h1 style="font-family:sans-serif;padding:40px;">Halaman Kirim Karya </h1>';
})->name('kirim-karya.index');

Route::get('/review', function () {
    return '<h1 style="font-family:sans-serif;padding:40px;">Halaman Review )</h1>';
})->name('review.index');