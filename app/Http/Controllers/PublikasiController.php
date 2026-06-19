<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publikasi = Karya::where('status','Diterima')
        ->latest()
        ->get();

        return view('publikasi.index', compact('publikasi'));
    }

public function puisi()
{
    $karyas = Karya::where('status','Diterima')
                    ->where('kategori','Puisi')
                    ->latest()
                    ->get();

    return view('publikasi.puisi', compact('karyas'));
}

public function cerpen()
{
    $karyas = Karya::where('status','Diterima')
                    ->where('kategori','Cerpen')
                    ->latest()
                    ->get();

    return view('publikasi.cerpen', compact('karyas'));
}

public function pantunquotes()
{
    $karyas = Karya::where('status','Diterima')
                    ->where('kategori','Pantun & Quotes')
                    ->latest()
                    ->get();

    return view('publikasi.pantun-quotes', compact('karyas'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Publikasi $publikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publikasi $publikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publikasi $publikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publikasi $publikasi)
    {
        //
    }

    public function kategori($kategori)
{
    $karyas = Karya::where('kategori', $kategori)->get();

    return view('karya.kategori', compact('karyas', 'kategori'));
}


}
