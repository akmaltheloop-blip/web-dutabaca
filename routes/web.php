<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Publikasi
Route::get('/publikasi', function () {
    return view('publikasi.index');
})->name('publikasi.index');

// Kirim Karya
Route::get('/kirim-karya', function () {
    return view('kirim-karya.index');
})->name('kirim-karya.index');

// Review
Route::get('/review', function () {
    return view('review.index');
})->name('review.index');

Route::get('/review/detail', function () {
    return view('review.detail');
})->name('review.detail');

// Profil
Route::get('/profil', function () {
    return view('profil.index');
})->name('profil.index');


/*
|--------------------------------------------------------------------------
| Publications Resource
|--------------------------------------------------------------------------
*/

Route::resource('publications', PublicationController::class);

/*
|--------------------------------------------------------------------------
| Authentication (Laravel Breeze)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';