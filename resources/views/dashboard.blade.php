@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

{{-- Header --}}
<div data-aos="fade-down"
     class="flex justify-between items-center mb-8">

    {{-- Logo kiri --}}
    <div class="flex items-center gap-4">

        <img
            src="{{ asset('images/logo-dutabaca.png') }}"
            alt="Logo Duta Baca"
            class="w-16 h-16 object-contain">

        <div>
            <h2 class="text-2xl font-bold text-[#5b3b1c]">
                Duta Baca
            </h2>

            <p class="text-gray-500 text-sm">
                UNIVERSITAS MALIKUSSALEH
            </p>
        </div>

    </div>


</div>

{{-- Banner --}}
<div data-aos="zoom-in"
     class="bg-gradient-to-r from-[#7a5134] to-[#c59a77]
     rounded-3xl p-10 text-white mb-8 flex justify-between items-center">

    <div data-aos="fade-right"
     data-aos-delay="200"
     class="max-w-xl">  

        <h3 class="text-4xl font-bold mb-3">
            Selamat Datang,
            <br>Sobat Literasi!
        </h3>

        <p class="text-lg opacity-90 mb-6">
            Wadah literasi mahasiswa untuk berbagi karya,
            publikasi, dan budaya membaca di lingkungan kampus.
        </p>

        <div class="flex gap-4">

           <a href="#sorotan"
            class="bg-white text-[#5b3b1c] px-5 py-3 rounded-xl font-semibold">
             Lihat Berita
            </a>

            <a href="{{ route('publikasi.index') }}"
                 class="border border-white px-5 py-3 rounded-xl font-semibold">
                 Publikasi
            </a>

        </div>
    </div>

    {{-- Foto kanan --}}
    <div data-aos="fade-left"
     data-aos-delay="400"
     class="hidden md:block">

        <img
            src="{{ asset('images/foto-dutabaca.jpeg') }}"
            alt="Tim Duta Baca"
            class="w-[350px] rounded-3xl object-cover shadow-lg">

    </div>

</div>



{{-- Bawah --}}
<div class="space-y-6">

    {{-- Kolom kiri --}}
    <div class="space-y-6">

        <div class="overflow-x-auto">
    <div class="flex gap-6 pb-4">

        {{-- Berita 1 --}}
        <div class="min-w-[450px] bg-white rounded-3xl p-8 shadow-sm">
            <h3 class="text-xl font-bold text-[#5b3b1c] mb-3">
                Sorotan Pekan Ini
            </h3>

            <h4 class="text-2xl font-semibold mb-3">
                Nur Akmal Harumkan Unimal di Ajang Duta Baca
            </h4>

            <p class="text-gray-600 leading-8">
                Nur Akmal, mahasiswa Program Studi Teknik Informatika...
            </p>
        
            <a href=""https://news.unimal.ac.id/index/single/7731/empat-duta-baca-unimal-raih-prestasi-pada-lomba-video-konten-literasi-aceh-utara"
               target="_blank"
               class="inline-block mt-6 bg-[#7a5134] text-white px-5 py-3 rounded-xl">
                Baca Selengkapnya
            </a>
        </div>

        {{-- Berita 2 --}}
        <div class="min-w-[450px] bg-white rounded-3xl p-8 shadow-sm">

         <h4 class="text-2xl font-semibold mb-3">
                Gandeng Duta Humas dan Ruang Aksara,
                Duta Baca Unimal Meriahkan Festival Literasi Aceh Utara
            </h4>

             <p class="text-gray-600 leading-8">
                Duta Baca Universitas Malikussaleh (Unimal)
                berkolaborasi dengan...
            </p>

            <a href="https://news.unimal.ac.id/index/single/7205/gandeng-duta-humas-dan-ruang-aksara-duta-baca-unimal-meriahkan-festival-literasi-aceh-utara"
               target="_blank"
               class="inline-block mt-6 bg-[#7a5134] text-white px-5 py-3 rounded-xl">
                Baca Selengkapnya
            </a>

        </div>

        {{-- Berita 3 --}}
        <div class="min-w-[450px] bg-white rounded-3xl p-8 shadow-sm">
            <h4 class="text-2xl font-semibold mb-3">
               Mahasiswa Teknik Unimal Raih Juara 
                Harapan III Duta Baca Aceh Utara 2025
            </h4>
            
            <p class="text-gray-600 leading-8">
                Pemilihan Duta Baca tingkat daerah 
                Kabupaten/Kota tahun 2025 yang digelar...
            </p>
             <a href="https://news.unimal.ac.id/index/single/7409/mahasiswa-teknik-unimal-raih-juara-harapan-iii-duta-baca-aceh-utara-2025"
               target="_blank"
               class="inline-block mt-6 bg-[#7a5134] text-white px-5 py-3 rounded-xl">
                Baca Selengkapnya
            </a>



        </div>

        {{-- Berita 4 --}}
        <div class="min-w-[450px] bg-white rounded-3xl p-8 shadow-sm">
            <h4 class="text-2xl font-semibold mb-3">
               Mahasiswa Informatika Unimal Tampil 
                di Ajang Literasi dan Bahasa, Perkuat 
                Peran sebagai Duta Baca dan Duta Bahasa
            </h4>

            <p class="text-gray-600 leading-8">
                Kiprah mahasiswa Program Studi Teknik Informatika, 
                Jurusan Informatika, Universitas Malikussaleh...
            </p>

            <a href="https://informatika.unimal.ac.id/berita/mahasiswa-informatika-unimal-tampil-di-ajang-literasi-dan-bahasa-perkuat-peran-sebagai-duta-baca-dan-duta-bahasa"
               target="_blank"
               class="inline-block mt-6 bg-[#7a5134] text-white px-5 py-3 rounded-xl">
                Baca Selengkapnya
            </a>
        </div>

    </div>
</div>

    </div>
    {{-- Visi & Misi --}}
<div class="grid md:grid-cols-2 gap-6 mt-10">

    {{-- Visi --}}
    <div
        data-aos="fade-right"
        class="bg-white rounded-3xl p-8 shadow-sm">

        <h3 class="text-2xl font-bold text-[#5b3b1c] mb-4">
            Visi
        </h3>

        <p class="text-gray-600 leading-8">
            Menjadi pelopor budaya literasi di lingkungan
            Universitas Malikussaleh yang kreatif, inovatif,
            dan berdaya saing dalam meningkatkan minat baca,
            menulis, serta pengembangan ilmu pengetahuan.
        </p>

    </div>

    {{-- Misi --}}
    <div
        data-aos="fade-left"
        class="bg-white rounded-3xl p-8 shadow-sm">

        <h3 class="text-2xl font-bold text-[#5b3b1c] mb-4">
            Misi
        </h3>

        <ul class="list-disc pl-5 text-gray-600 leading-8 space-y-2">
            <li>Meningkatkan budaya membaca di kalangan mahasiswa.</li>
            <li>Mendorong lahirnya karya tulis yang berkualitas.</li>
            <li>Menjadi wadah pengembangan literasi kampus.</li>
            <li>Membangun kolaborasi dengan komunitas literasi.</li>
            <li>Menyebarluaskan informasi dan publikasi ilmiah.</li>
        </ul>

    </div>

</div>

    

</div>

@endsection