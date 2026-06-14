@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="max-w-7xl mx-auto space-y-10">

    {{-- HEADER --}}
    <div class="flex justify-between items-center pb-4 border-b">

        <div class="flex items-center gap-4">
            <img src="{{ asset('images/logo-dutabaca.png') }}" class="w-14 h-14">

            <div>
                <h2 class="text-2xl font-bold text-[#5b3b1c]">Duta Baca</h2>
                <p class="text-sm text-[#482d13]">Universitas Malikussaleh</p>
            </div>
        </div>

    </div>

    {{-- BANNER --}}
    <div class="bg-gradient-to-r from-[#7a5134] to-[#c59a77]
        rounded-3xl p-8 text-white flex flex-col md:flex-row
        justify-between items-center gap-6">

        <div class="max-w-xl">
            <h3 class="text-4xl font-bold mb-3">
                Selamat Datang,<br> Sobat Literasi!
            </h3>

            <p class="text-lg opacity-90 mb-5">
                Wadah literasi mahasiswa untuk berbagi karya, publikasi, dan budaya membaca.
            </p>

            <a href="#tentang-kami"
               class="bg-white text-[#5b3b1c] px-5 py-3 rounded-xl font-bold">
                Tentang Kami
            </a>
        </div>

        {{-- IMAGE SWIPER --}}
        <div class="hidden md:block w-[320px]">
            <div class="swiper fotoSwiper rounded-2xl overflow-hidden h-[220px]">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/foto-dutabaca2.jpeg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/foto-dutabaca.jpeg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/foto-dutabaca4.jpeg') }}" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>
        </div>

    </div>

    {{-- BERITA --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <div class="lg:col-span-2">

            <div class="swiper beritaSwiper">

                <div class="swiper-wrapper">

                    @foreach([1,2,3,4] as $item)

                    <div class="swiper-slide">
                        <div class="bg-white p-5 rounded-2xl shadow-lg h-[260px] flex flex-col">

                            <h4 class="font-bold text-lg mb-2">
                                Judul Berita {{ $item }}
                            </h4>

                            <p class="text-sm text-gray-600 line-clamp-3">
                                Isi ringkasan berita ditampilkan di sini agar lebih rapi dan tidak berantakan.
                            </p>

                            <a href="#"
                               class="mt-auto bg-gradient-to-r from-[#7a5134] to-[#c59a77]
                               text-white px-4 py-2 rounded-xl text-center">
                                Baca Selengkapnya
                            </a>

                        </div>
                    </div>

                    @endforeach

                </div>

                <div class="swiper-pagination mt-4"></div>

            </div>

        </div>

    </div>

    {{-- VISI MISI --}}
    <div id="tentang-kami" class="space-y-8">

        {{-- VISI --}}
        <div class="bg-white rounded-3xl p-8 shadow-xl grid md:grid-cols-2 gap-8 items-center">

            <img src="{{ asset('images/foto-dutabaca3.jpeg') }}"
                 class="rounded-2xl h-64 w-full object-cover">

            <div>
                <h3 class="text-2xl font-bold text-[#5b3b1c] mb-3">Visi</h3>
                <p class="leading-7">
                    Menjadi pelopor budaya literasi di Universitas Malikussaleh...
                </p>
            </div>

        </div>

        {{-- MISI --}}
        <div class="bg-white rounded-3xl p-8 shadow-xl grid md:grid-cols-2 gap-8 items-center">

            <div>
                <h3 class="text-2xl font-bold text-[#5b3b1c] mb-3">Misi</h3>

                <ul class="list-disc pl-5 space-y-2">
                    <li>Meningkatkan budaya membaca</li>
                    <li>Mendorong karya tulis</li>
                    <li>Menjadi wadah literasi</li>
                </ul>
            </div>

            <img src="{{ asset('images/foto-dutabaca5.jpeg') }}"
                 class="rounded-2xl h-64 w-full object-cover">

        </div>

    </div>

</div>

@endsection