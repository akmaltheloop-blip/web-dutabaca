<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\KaryaController;
use App\Models\Karya;


/*
|--------------------------------------------------------------------------
| Web Routes - Duta Baca Unimal
|--------------------------------------------------------------------------
*/

// 1. Halaman Utama / Dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard.index');

// Penilaian / Review (Rute Controller untuk tim/reviewer)
Route::get('/review', [ReviewController::class, 'index'])->name('review.index');
Route::get('/review/{id}', [ReviewController::class, 'detail'])->name('review.detail');
Route::post('/review/{id}', [ReviewController::class, 'updateStatus'])->name('review.update');

Route::get('/penilaian', [ReviewController::class, 'index'])
->name('penilaian.index');

Route::resource('publikasi', PublikasiController::class);

Route::get('/kirim-karya', [KaryaController::class, 'index'])
    ->name('kirim-karya.index');
    
Route::middleware('auth')->group(function () {

    Route::post('/kirim-karya', [KaryaController::class, 'store'])
    ->name('kirim-karya.store');

    Route::get('/kirim-karya/sukses', [KaryaController::class, 'sukses'])
    ->name('kirim-karya.sukses');

    // Profil & Edit Profil (Sudah Terkunci Auth)
    Route::get('/profil', function () {

    $user = auth()->user();

    $published = Karya::where('user_id', $user->id)
        ->where('status', 'Diterima')
        ->count();

    $review = Karya::where('user_id', $user->id)
        ->where('status', 'Menunggu Review')
        ->count();

    $revisi = Karya::where('user_id', $user->id)
        ->where('status', 'Revisi')
        ->count();

    $ditolak = Karya::where('user_id', $user->id)
        ->where('status', 'Ditolak')
        ->count();

    $karyas = Karya::where('user_id', $user->id)
        ->latest()
        ->get();


    return view('profil.index', compact(
        'published',
        'review',
        'revisi',
        'ditolak',
        'karyas'
    ));

})->name('profil.index');

    Route::get('/profil/edit', [ProfilController::class,'edit']) 
    ->name('profil.edit');

    Route::put('/profil', [ProfilController::class, 'update'])
        ->name('profil.update');
    })->name('profil.update');

require __DIR__.'/auth.php';