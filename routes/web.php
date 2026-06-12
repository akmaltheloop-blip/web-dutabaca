<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

/*
|--------------------------------------------------------------------------
| Publikasi
|--------------------------------------------------------------------------
*/

Route::resource('publikasi', PublikasiController::class);

/*
|--------------------------------------------------------------------------
| Kirim Karya
|--------------------------------------------------------------------------
*/

Route::get('/kirim-karya', function () {
    return view('kirim-karya.index');
})->name('kirim-karya.index');

/*
|--------------------------------------------------------------------------
| Penilaian / Review
|--------------------------------------------------------------------------
*/

Route::get('/review', [ReviewController::class, 'index'])
    ->name('review.index');

Route::get('/review/{id}', [ReviewController::class, 'detail'])
    ->name('review.detail');

Route::post('/review/{id}', [ReviewController::class, 'updateStatus'])
    ->name('review.update');

/*
|--------------------------------------------------------------------------
| Profil
|--------------------------------------------------------------------------
*/

Route::get('/profil', function () {
    return view('profil.index');
})->name('profil.index');

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';