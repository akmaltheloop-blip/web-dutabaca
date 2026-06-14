@extends('layouts.app')

@section('title', 'Kirim Karya')

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
            class="px-6 py-3 bg-white text-[#5b3b1c] border border-[#5b3b1c] rounded-xl font-semibold">
            Login
        </a>

        <a href="{{ route('register') }}"
            class="px-6 py-3 bg-white text-[#5b3b1c] border border-[#5b3b1c] rounded-xl font-semibold">
            Register
        </a>

    </div>

</div>

@endguest

@auth

<div class="bg-white rounded-2xl p-8 shadow-sm">

    <h2 class="text-2xl font-bold text-[#5b3b1c] mb-6">
        Kirim Karya
    </h2>

    <form
    action="{{ route('kirim-karya.store') }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf

        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Judul Karya
            </label>
            <input
                type="text"
                name="judul"
                class="w-full border rounded-lg px-4 py-2"
                placeholder="Masukkan judul karya">
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Kategori
            </label>

            <select 
                name="kategori"
                class="w-full border rounded-lg px-4 py-2">

                <option>Pilih Kategori</option>
                <option>Cerpen</option>
                <option>Puisi</option>
                <option>Pantun/Quotes</option>

            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Deskripsi Karya
            </label>

            <textarea
                name = "deskripsi"
                rows="5"
                class="w-full border rounded-lg px-4 py-2"
                placeholder="Masukkan deskripsi karya"></textarea>
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-medium">
                Upload File
            </label>

            <input
                type="file"
                name="file"
                accept=".pd"
                class="w-full border rounded-lg px-4 py-2">
        </div>

        <button
            type="submit"
            class="bg-blue-600 text-white px-6 py-2 rounded-lg">
            Kirim Karya
        </button>

    </form>

</div>
@endauth

@endsection