@extends('layouts.app')

@section('title', 'Edit Profil')

@section('content')

<div class="max-w-4xl mx-auto py-8 px-4">

    <div class="bg-white rounded-3xl shadow-md p-8">

        <h2 class="text-3xl font-bold text-[#5b3b1c] mb-8 text-center">
            Edit Profil
        </h2>

        @if ($errors->any())
            <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('profil.update') }}">
            @csrf
            @method('PUT')

            <div class="grid md:grid-cols-2 gap-6">

                <!-- Nama -->
                <div>
                    <label class="block mb-2 font-medium">
                        Nama Lengkap
                    </label>

                    <input type="text"
                        name="name"
                        value="{{ old('name', auth()->user()->name ?? '') }}"
                        class="w-full border rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#5b3b1c]">
                </div>

                <!-- NIM -->
                <div>
                    <label class="block mb-2 font-medium">
                        NIM
                    </label>

                    <input type="text"
                        name="nim"
                        value="{{ old('nim', auth()->user()->nim ?? '') }}"
                        class="w-full border rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#5b3b1c]">
                </div>

                <!-- Fakultas -->
                <div>
                    <label class="block mb-2 font-medium">
                        Fakultas
                    </label>

                    <input type="text"
                        name="fakultas"
                        value="{{ old('fakultas', auth()->user()->fakultas ?? '') }}"
                        class="w-full border rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#5b3b1c]">
                </div>

                <!-- Prodi -->
                <div>
                    <label class="block mb-2 font-medium">
                        Program Studi
                    </label>

                    <input type="text"
                        name="prodi"
                        value="{{ old('prodi', auth()->user()->prodi ?? '') }}"
                        class="w-full border rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#5b3b1c]">
                </div>

                <!-- Username -->
                <div>
                    <label class="block mb-2 font-medium">
                        Username
                    </label>

                    <input type="text"
                        name="username"
                        value="{{ old('username', auth()->user()->username ?? '') }}"
                        class="w-full border rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#5b3b1c]">
                </div>

                <!-- Email -->
                <div>
                    <label class="block mb-2 font-medium">
                        Email
                    </label>

                    <input type="email"
                        name="email"
                        value="{{ old('email', auth()->user()->email ?? '') }}"
                        class="w-full border rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#5b3b1c]">
                </div>

            </div>

            <hr class="my-8">

            <h3 class="text-xl font-semibold text-[#5b3b1c] mb-4">
                Ganti Password (Opsional)
            </h3>

            <div class="grid md:grid-cols-2 gap-6">

                <div>
                    <label class="block mb-2 font-medium">
                        Password Baru
                    </label>

                    <input type="password"
                        name="password"
                        class="w-full border rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#5b3b1c]">
                </div>

                <div>
                    <label class="block mb-2 font-medium">
                        Konfirmasi Password Baru
                    </label>

                    <input type="password"
                        name="password_confirmation"
                        class="w-full border rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#5b3b1c]">
                </div>

            </div>

            <div class="flex justify-center gap-4 mt-10">

                <a href="{{ route('profil.index') }}"
                    class="px-6 py-3 border border-[#5b3b1c] text-[#5b3b1c] rounded-xl hover:bg-[#5b3b1c] hover:text-white transition">
                    Batal
                </a>

                <button type="submit"
                    class="px-6 py-3 bg-[#5b3b1c] text-white rounded-xl hover:opacity-90">
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

@endsection