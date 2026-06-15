<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;

class KaryaController extends Controller
{
    public function index()
    {
        $karyas = collect();

        if(auth()->check())
        {
        $karyas = Karya::where('user_id', auth()->id())
            ->latest()
            ->get();
        }

        return view('kirim-karya.index', compact('karyas'));
    
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'deskripsi' => 'nullable',
            'file' => 'required|mimes:pdf,doc,docx|max:10240',
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
