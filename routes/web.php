<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/publikasi', function () {
    return view('publikasi.index');
})->name('publikasi.index');

//Route::middleware('auth')->group(function (){

    Route::get('/kirim-karya', function () {
        return view('kirim-karya.index');
    })->name('kirim-karya.index');
//});

Route::get('/review', function () {
    return view('review.index');
})->name('review.index');

require __DIR__.'/auth.php';

Route::get('/profil', function () {
    return view('profil.index');
})->name('profil.index');

use App\Http\Controllers\ProfilController;

Route::middleware('auth')->group(function () {

    Route::get('/profil', [ProfilController::class, 'index'])
        ->name('profil.index');

    Route::get('/profil/edit', [ProfilController::class, 'edit'])
        ->name('profil.edit');
    
    Route::put('/profil/update', [ProfilController::class, 'update'])
        ->name('profil.update');

});
