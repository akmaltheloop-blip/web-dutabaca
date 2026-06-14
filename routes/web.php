<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ReviewController;


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

Route::get('/penilaian', function () {
    return view('penilaian.index');
})->name('penilaian.index');

Route::resource('publikasi', PublikasiController::class);


// 2. Halaman Publikasi
Route::get('/publikasi', function () {
    return view('publikasi.index');
})->name('publikasi.index');

Route::middleware('auth')->group(function () {

    // Kirim Karya (Sudah Terkunci Auth)
    Route::get('/kirim-karya', function () {
        return view('kirim-karya.index');
    })->name('kirim-karya.index');

    // Profil & Edit Profil (Sudah Terkunci Auth)
    Route::get('/profil', function () {
        return view('profil.index');
    })->name('profil.index');

    Route::get('/profil/edit', function () {
        return view('profil.edit');
    })->name('profil.edit');

    Route::put('/profil', function (Request $request) {
        // 1. Ambil data user yang sedang login saat ini
        $user = auth()->user();

        // 2. Validasi data yang dikirim dari formulir
        $request->validate([
            'name'     => 'required|string|max:255',
            'nim'      => 'nullable|string|max:20',
            'fakultas' => 'nullable|string|max:100',
            // 'prodi' => 'nullable|string|max:100', // aktifkan jika ada input prodi
        ]);

        // 3. Update data user di database
        $user->update([
            'name'     => $request->name,
            'nim'      => $request->nim,
            'fakultas' => $request->fakultas,
            // 'prodi' => $request->prodi, // aktifkan jika ada input prodi
        ]);

        // 4. Kembalikan ke halaman profil dengan pesan sukses
        return redirect()->route('profil.index')->with('success', 'Profil berhasil diperbarui!');
    })->name('profil.update');
});

require __DIR__.'/auth.php';