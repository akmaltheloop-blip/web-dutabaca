<?php

use Illuminate\Http\Request;
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

    Route::put('/profil', function (\Illuminate\Http\Request $request) {
       // 1. Ambil data user yang sedang login saat ini
        $user = auth()->user();

        // 2. Validasi data yang dikirim dari formulir (sesuaikan dengan name attribute di input Anda)
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

/*
|--------------------------------------------------------------------------
| Authentication System
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';