<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| Public Routes (Akses Tanpa Login)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Penilaian / Review (Bisa diakses publik/reviewer sesuai rencana awal)
Route::get('/review', [ReviewController::class, 'index'])->name('review.index');
Route::get('/review/{id}', [ReviewController::class, 'detail'])->name('review.detail');
Route::post('/review/{id}', [ReviewController::class, 'updateStatus'])->name('review.update');

// Publikasi (Menggunakan Resource Controller untuk CRUD)
Route::resource('publikasi', PublikasiController::class);


/*
|--------------------------------------------------------------------------
| Authenticated Routes (HANYA BISA DIAKSES SETELAH LOGIN)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Kirim Karya
    Route::get('/kirim-karya', function () {
        return view('kirim-karya.index');
    })->name('kirim-karya.index');

    // Profil & Edit Profil
    Route::get('/profil', function () {
        return view('profil.index');
    })->name('profil.index');

    Route::get('/profil/edit', function () {
        return view('profil.edit');
    })->name('profil.edit');
    
});

/*
|--------------------------------------------------------------------------
| Authentication System
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';