<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;

class KaryaController extends Controller
{
    public function index()
    {
        return view('kirim-karya.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'deskripsi' => 'nullable',
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        $filePath = $request->file('file')
            ->store('karya', 'public');

        Karya::create([
            'user_id' => auth()->id(),
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'file' => $filePath,
            'status' => 'Menunggu Review',
        ]);

        return redirect()
            ->route('kirim-karya.sukses');
    }

    public function sukses()
    {
        return view('kirim-karya.sukses');
    }
}
