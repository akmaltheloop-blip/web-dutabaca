<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    /**
     * Halaman Utama Publikasi (Semua Karya) + Fitur Global Search
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $publikasi = Karya::where('status', 'Diterima')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('judul', 'like', "%{$search}%")
                      ->orWhere('deskripsi', 'like', "%{$search}%")
                      ->orWhereHas('user', function ($userQuery) use ($search) {
                          $userQuery->where('name', 'like', "%{$search}%");
                      });
                });
            })
            ->latest()
            ->simplepaginate(9)
            ->withQueryString();

        return view('publikasi.index', compact('publikasi'));
    }

    /**
     * Kategori: Puisi + Fitur Search Spesifik Puisi
     */
    public function puisi(Request $request)
    {
        $search = $request->search;

        $karyas = Karya::where('status', 'Diterima')
            ->where('kategori', 'Puisi')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('judul', 'like', "%{$search}%")
                      ->orWhereHas('user', function ($userQuery) use ($search) {
                          $userQuery->where('name', 'like', "%{$search}%");
                      });
                });
            })
            ->latest()
            ->simplepaginate(9)
            ->withQueryString();

        return view('publikasi.puisi', compact('karyas'));
    }

    /**
     * Kategori: Cerpen + Fitur Search Spesifik Cerpen
     */
    public function cerpen(Request $request)
    {
        $search = $request->search;

        $karyas = Karya::where('status', 'Diterima')
            ->where('kategori', 'Cerpen')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('judul', 'like', "%{$search}%")
                      ->orWhereHas('user', function ($userQuery) use ($search) {
                          $userQuery->where('name', 'like', "%{$search}%");
                      });
                });
            })
            ->latest()
            ->simplepaginate(9)
            ->withQueryString();

        return view('publikasi.cerpen', compact('karyas'));
    }

    /**
     * Kategori: Pantun & Quotes + Fitur Search Spesifik Pantun/Quotes
     */
    public function pantunquotes(Request $request)
    {
        $search = $request->search;

        $karyas = Karya::where('status', 'Diterima')
            ->where('kategori', 'Pantun/Quotes') // Sesuaikan string ini dengan isi value di databasemu
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('judul', 'like', "%{$search}%")
                      ->orWhereHas('user', function ($userQuery) use ($search) {
                          $userQuery->where('name', 'like', "%{$search}%");
                      });
                });
            })
            ->latest()
            ->simplepaginate(9)
            ->withQueryString();

        // Diarahkan ke file puisi.blade.php / cerpen.blade.php / pantunquotes.blade.php yang setipe
        return view('publikasi.pantun-quotes', compact('karyas')); 
    }
}