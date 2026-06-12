<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index()
    {
        $user = Auth::user();

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

        return view('profil.index', compact(
            'user',
            'published',
            'review',
            'revisi',
            'ditolak'
        ));
    }
    public function edit()
{
    $user = auth()->user();

    return view('profil.edit', compact('user'));
}

public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'fakultas' => 'required',
            'prodi' => 'required',
            'username' => 'required',
            'email' => 'required|email',
        ]);

        $user->name = $request->name;
        $user->nim = $request->nim;
        $user->fakultas = $request->fakultas;
        $user->prodi = $request->prodi;
        $user->username = $request->username;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()
            ->route('profil.index')
            ->with('success', 'Profil berhasil diperbarui');
    }
}