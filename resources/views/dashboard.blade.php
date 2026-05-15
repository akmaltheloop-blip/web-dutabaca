@extends('layouts.dutabaca')

@section('content')
    <!-- Welcome Card -->
    <div class="bg-white rounded-3xl shadow-lg p-10 mb-8 border border-[#F0E6D6]">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-5xl font-extrabold text-[#5B371E] mb-4">
                    Selamat Datang Sobat Duta Baca!
                </h2>
                <p class="text-2xl text-gray-700">
                    Halo, Sobat Literasi Indonesia 👋
                </p>
            </div>

            <img src="{{ asset('images/logo-dutabaca.png') }}"
                 alt="Logo Duta Baca"
                 class="w-36 h-36 object-contain opacity-90">
        </div>
    </div>

    <!-- Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-[#6B4226] text-white p-8 rounded-3xl shadow-lg">
            <h3 class="text-2xl font-semibold mb-4"> Publikasi</h3>
            <p class="text-6xl font-bold">12</p>
        </div>

        <div class="bg-[#E6B325] text-white p-8 rounded-3xl shadow-lg">
            <h3 class="text-2xl font-semibold mb-4"> Karya Terkirim</h3>
            <p class="text-6xl font-bold">8</p>
        </div>

        <div class="bg-[#4E8B4A] text-white p-8 rounded-3xl shadow-lg">
            <h3 class="text-2xl font-semibold mb-4"> Review</h3>
            <p class="text-6xl font-bold">5</p>
        </div>
    </div>
@endsection