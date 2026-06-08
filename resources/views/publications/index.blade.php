@extends('layouts.app')

@section('title', 'Publikasi')

@section('content')

<div class="mb-8">
    <h2 class="text-3xl font-bold text-[#5b3b1c] mb-2">
        Publikasi
    </h2>

    <p class="text-gray-500">
        Temukan berbagai karya, artikel, jurnal, cerita, dan tulisan dari mahasiswa.
    </p>
</div>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">
        <img src="https://picsum.photos/400/200"
             class="w-full h-48 object-cover">

        <div class="p-6">

            <h3 class="font-bold text-xl text-[#5b3b1c] mb-2">
                Judul Publikasi
            </h3>

            <p class="text-gray-600 mb-4">
                Deskripsi singkat publikasi mahasiswa.
            </p>

            <a href="#"
               class="inline-block bg-[#7a5134] text-white px-4 py-2 rounded-xl">
                Baca
            </a>

        </div>
    </div>

    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">
        <img src="https://picsum.photos/401/200"
             class="w-full h-48 object-cover">

        <div class="p-6">

            <h3 class="font-bold text-xl text-[#5b3b1c] mb-2">
                Artikel Literasi
            </h3>

            <p class="text-gray-600 mb-4">
                Artikel mengenai budaya membaca dan literasi.
            </p>

            <a href="#"
               class="inline-block bg-[#7a5134] text-white px-4 py-2 rounded-xl">
                Baca
            </a>

        </div>
    </div>

</div>

@endsection