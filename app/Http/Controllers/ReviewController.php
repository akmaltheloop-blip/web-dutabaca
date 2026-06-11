<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $karyas = Karya::where('status', 'pending')->get();

        return view('review.index', compact('karyas'));
    }

    public function detail($id)
    {
        $karya = Karya::findOrFail($id);

        return view('review.detail', compact('karya'));
    }

    public function updateStatus(Request $request, $id)
    {
        $karya = Karya::findOrFail($id);

        $karya->status = $request->status;

        $karya->save();

        if ($request->status == 'accepted') {
            return redirect()->route('publikasi.index');
        }

        return redirect()->route('review.index');
    }
}