@extends('layouts.app')

@section('title', 'Penilaian')

@section('content')

<div class="bg-white rounded-3xl p-8 shadow-sm">

    <h3 class="text-2xl font-bold text-[#5b3b1c] mb-2">
        Daftar Karya Masuk
    </h3>

    <p class="text-gray-500 mb-6">
        Karya yang menunggu proses penilaian reviewer.
    </p>

    <div class="space-y-4">

        <div class="border rounded-xl p-4 flex justify-between items-center">
            <div>
                <h4 class="font-semibold">Cerpen Literasi</h4>
                <p class="text-sm text-gray-500">
                    Penulis: Nur Akmal
                </p>
            </div>

            <a href="{{ route('review.detail') }}"
               class="bg-[#5b3b1c] text-white px-4 py-2 rounded-lg">
                Detail
            </a>
        </div>
        <a href="{{ route('review.detail') }}"
               class="text-sm text-[#5b3b1c] hover:underline">
                Detail
            </a>

        <div class="border rounded-xl p-4 flex justify-between items-center">
            <div>
                <h4 class="font-semibold">Budaya Membaca</h4>
                <p class="text-sm text-gray-500">
                    Penulis: Fida
                </p>
            </div>

            <a href="{{ route('review.detail') }}"
               class="bg-[#5b3b1c] text-white px-4 py-2 rounded-lg">
                Detail
            </a>
        </div>

    </div>

</div>

@endsection