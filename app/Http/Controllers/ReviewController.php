<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Hanya reviewer yang boleh mengakses
        if (!in_array($user->role, ['reviewer1', 'reviewer2'])) {
            abort(403);
        }

        // Reviewer 1 hanya Cerpen
        if ($user->role == 'reviewer1') {

            $karyas = Karya::where('status', 'Menunggu Review')
                ->where('kategori', 'Cerpen')
                ->get();

        }
        // Reviewer 2 hanya Puisi & Pantun
        else {

            $karyas = Karya::where('status', 'Menunggu Review')
                ->whereIn('kategori', [
                    'Puisi',
                    'Pantun'
                ])
                ->get();
        }

        return view('review.index', compact('karyas'));
    }

    public function detail($id)
    {
        $user = auth()->user();

        if (!in_array($user->role, ['reviewer1', 'reviewer2'])) {
            abort(403);
        }

        $karya = Karya::findOrFail($id);

        // Reviewer 1 tidak boleh melihat selain Cerpen
        if (
            $user->role == 'reviewer1' &&
            $karya->kategori != 'Cerpen'
        ) {
            abort(403);
        }

        // Reviewer 2 tidak boleh melihat Cerpen
        if (
            $user->role == 'reviewer2' &&
            !in_array($karya->kategori, ['Puisi', 'Pantun'])
        ) {
            abort(403);
        }

        return view('review.detail', compact('karya'));
    }

    public function updateStatus(Request $request, $id)
    {
        $user = auth()->user();

        if (!in_array($user->role, ['reviewer1', 'reviewer2'])) {
            abort(403);
        }

        $request->validate([
            'status' => 'required'
        ]);

        // Catatan wajib jika Ditolak atau Revisi
        if (
            $request->status == 'Ditolak' ||
            $request->status == 'Revisi'
        ) {
            $request->validate([
                'catatan_review' => 'required'
            ]);
        }

        $karya = Karya::findOrFail($id);

        // Validasi reviewer sesuai kategori
        if (
            $user->role == 'reviewer1' &&
            $karya->kategori != 'Cerpen'
        ) {
            abort(403);
        }

        if (
            $user->role == 'reviewer2' &&
            !in_array($karya->kategori, ['Puisi', 'Pantun'])
        ) {
            abort(403);
        }

        // Simpan hasil review
        $karya->status = $request->status;
        $karya->catatan_review = $request->catatan_review;
        $karya->save();

        // Jika diterima masuk ke publikasi
        if ($request->status == 'Diterima') {

            return redirect()
                ->route('publikasi.index')
                ->with(
                    'success',
                    'Karya berhasil diterima dan dipublikasikan.'
                );
        }

        return redirect()
            ->route('review.index')
            ->with(
                'success',
                'Penilaian berhasil disimpan.'
            );
    }
}