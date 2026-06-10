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

<div class="bg-white rounded-2xl shadow-md p-8 text-center">

    <div class="w-28 h-28 rounded-full bg-[#5b3b1c]
        text-white flex items-center justify-center
        mx-auto text-4xl font-bold">

        {{ strtoupper(substr($user->name,0,1)) }}
    </div>

    <h2 class="mt-4 text-2xl font-bold text-[#5b3b1c]">
        {{ $user->name }}
    </h2>

    <p class="text-gray-500">
        {{ '@'.$user->username }}
    </p>

    <div class="flex justify-center gap-3 mt-5">

        <a href="{{ route('profil.edit') }}"
            class="px-4 py-2 border border-[#5b3b1c]
            text-[#5b3b1c] rounded-lg
            hover:bg-[#5b3b1c]
            hover:text-white transition">

            Edit Profil
        </a>

        <form method="POST"
            action="{{ route('logout') }}">
            @csrf

            <button
                class="px-4 py-2 border border-red-500
                text-red-500 rounded-lg
                hover:bg-red-500
                hover:text-white transition">

                Logout
            </button>
        </form>

    </div>

</div>

<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">

    <div class="bg-white rounded-xl shadow p-5 text-center">
        <h3 class="text-3xl font-bold text-green-600">
            {{ $published }}
        </h3>
        <p class="text-gray-600">
            Published
        </p>
    </div>

    <div class="bg-white rounded-xl shadow p-5 text-center">
        <h3 class="text-3xl font-bold text-yellow-500">
            {{ $review }}
        </h3>
        <p class="text-gray-600">
            Menunggu Review
        </p>
    </div>

    <div class="bg-white rounded-xl shadow p-5 text-center">
        <h3 class="text-3xl font-bold text-blue-500">
            {{ $revisi }}
        </h3>
        <p class="text-gray-600">
            Revisi
        </p>
    </div>

    <div class="bg-white rounded-xl shadow p-5 text-center">
        <h3 class="text-3xl font-bold text-red-500">
            {{ $ditolak }}
        </h3>
        <p class="text-gray-600">
            Ditolak
        </p>
    </div>

</div>

<div class="bg-white rounded-2xl shadow-md p-8 mt-6">

    <h3 class="text-xl font-bold text-[#5b3b1c] mb-6">
        Informasi Profil
    </h3>

    <div class="grid md:grid-cols-2 gap-6">

        <div>
            <label class="text-gray-500">NIM</label>
            <p class="font-semibold">{{ $user->nim }}</p>
        </div>

        <div>
            <label class="text-gray-500">Fakultas</label>
            <p class="font-semibold">{{ $user->fakultas }}</p>
        </div>

        <div>
            <label class="text-gray-500">Program Studi</label>
            <p class="font-semibold">{{ $user->prodi }}</p>
        </div>

        <div>
            <label class="text-gray-500">Email</label>
            <p class="font-semibold">{{ $user->email }}</p>
        </div>

    </div>

@endauth

@endsection