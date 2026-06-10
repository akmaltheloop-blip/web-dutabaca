@extends('layouts.app')

@section('title', 'Profil')

@section('content')

@guest

<div class="bg-white rounded-2xl p-8 shadow-sm max-w-3xl mx-auto">

    <h3 class="text-3xl font-bold text-[#5b3b1c] mb-3 text-center">
        Selamat Datang di Web Duta Baca
    </h3>

    <p class="text-gray-600 mb-6 text-center">
        Untuk mengirim karya, silakan login atau daftar akun terlebih dahulu.
    </p>

    <div class="flex justify-center gap-4">

        <a href="{{ route('login') }}"
            class="px-6 py-3 bg-white text-[#5b3b1c] border border-[#5b3b1c] rounded-xl font-semibold transition duration-300 hover:bg-[#5b3b1c] hover:text-white">
            Login
        </a>

        <a href="{{ route('register') }}"
            class="px-6 py-3 bg-white text-[#5b3b1c] border border-[#5b3b1c] rounded-xl font-semibold transition duration-300 hover:bg-[#5b3b1c] hover:text-white hover:shadow-md">
            Register
        </a>

    </div>

</div>

@endguest


@auth

<div class="bg-white rounded-2xl p-8 shadow-sm max-w-3xl">

    <h3 class="text-2xl font-bold mb-6">
        Profil Saya
    </h3>

    <div class="space-y-3">

        <p><strong>Nama :</strong> {{ Auth::user()->name }}</p>

        <p><strong>NIM :</strong> {{ Auth::user()->nim }}</p>

        <p><strong>Fakultas :</strong> {{ Auth::user()->fakultas }}</p>

        <p><strong>Program Studi :</strong> {{ Auth::user()->prodi }}</p>

        <p><strong>Username :</strong> {{ Auth::user()->username }}</p>

        <p><strong>Email :</strong> {{ Auth::user()->email }}</p>

    </div>

    <form method="POST"
          action="{{ route('logout') }}"
          class="mt-6">

        @csrf

        <button
            type="submit"
            class="px-6 py-3 bg-red-600 text-white rounded-xl">
            Logout
        </button>

    </form>

</div>

@endauth

@endsection