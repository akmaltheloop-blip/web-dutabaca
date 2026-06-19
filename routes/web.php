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

Route::get('/publikasi', [PublikasiController::class, 'index'])
    ->name('publikasi.index');

Route::get('/publikasi/puisi', [PublikasiController::class, 'puisi'])
    ->name('publikasi.puisi');

Route::get('/publikasi/cerpen', [PublikasiController::class, 'cerpen'])
    ->name('publikasi.cerpen');

Route::get('/publikasi/pantun-quotes', [PublikasiController::class, 'pantunquotes'])
    ->name('publikasi.pantunquotes');

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