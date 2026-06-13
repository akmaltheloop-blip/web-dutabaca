<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $karyas = Karya::where('status', 'Menunggu Review')->get();

        return view('review.index', compact('karyas'));
    }

    public function detail($id)
    {
        $karya = Karya::findOrFail($id);

        return view('review.detail', compact('karya'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required'
        ]);

        if (
            $request->status == 'Ditolak' ||
            $request->status == 'Revisi'
        ) {
            $request->validate([
                'catatan_review' => 'required'
            ]);
        }

        $karya = Karya::findOrFail($id);

        $karya->status = $request->status;
        $karya->catatan_review = $request->catatan_review;

        $karya->save();

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