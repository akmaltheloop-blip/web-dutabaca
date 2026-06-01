@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

{{-- Header --}}
<div class="flex justify-between items-center mb-8">

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

    {{-- Search kanan --}}
    <div class="w-80">

        <input
            type="text"
            placeholder="Cari publikasi..."
            class="w-full border border-gray-300 rounded-2xl px-5 py-3 focus:outline-none focus:ring-2 focus:ring-[#7a5134]">

    </div>

</div>

{{-- Banner --}}
<div class="bg-gradient-to-r from-[#7a5134] to-[#c59a77]
rounded-3xl p-10 text-white mb-8 flex justify-between items-center">

    <div class="max-w-xl">

        <h3 class="text-4xl font-bold mb-3">
            Selamat Datang,
            <br>Duta Literasi
        </h3>

        <p class="text-lg opacity-90 mb-6">
            Wadah literasi mahasiswa untuk berbagi karya,
            publikasi, dan budaya membaca di lingkungan kampus.
        </p>

        <div class="flex gap-4">

            <a href="#"
               class="bg-white text-[#5b3b1c] px-5 py-3 rounded-xl font-semibold">
                Lihat Berita
            </a>

            <a href="#"
               class="border border-white px-5 py-3 rounded-xl font-semibold">
                Publikasi
            </a>

        </div>
    </div>

    {{-- Foto kanan --}}
    <div class="hidden md:block">

        <img
            src="{{ asset('images/foto-dutabaca.jpeg') }}"
            alt="Tim Duta Baca"
            class="w-[350px] rounded-3xl object-cover shadow-lg">

    </div>

</div>

{{-- Statistik --}}
<div class="grid md:grid-cols-3 gap-6 mb-8">

    <div class="bg-white rounded-3xl p-6 shadow-sm">

        <h4 class="text-lg font-semibold text-[#5b3b1c]">
            Total Publikasi
        </h4>

        <p class="text-4xl font-bold mt-2">
            12
        </p>

        <p class="text-green-600 mt-2">
            +2 bulan ini
        </p>

    </div>

    <div class="bg-white rounded-3xl p-6 shadow-sm">

        <h4 class="text-lg font-semibold text-[#5b3b1c]">
            Karya Terkirim
        </h4>

        <p class="text-4xl font-bold mt-2">
            8
        </p>

        <p class="text-yellow-600 mt-2">
            3 menunggu review
        </p>

    </div>

    <div class="bg-white rounded-3xl p-6 shadow-sm">

        <h4 class="text-lg font-semibold text-[#5b3b1c]">
            Review
        </h4>

        <p class="text-4xl font-bold mt-2">
            5
        </p>

        <p class="text-green-600 mt-2">
            Rata-rata 4.8/5
        </p>

    </div>

</div>

{{-- Bawah --}}
<div class="grid md:grid-cols-2 gap-6">

    {{-- Kolom kiri --}}
    <div class="space-y-6">

        {{-- Sorotan --}}
        <div class="bg-white rounded-3xl p-8 shadow-sm">

            <h3 class="text-xl font-bold text-[#5b3b1c] mb-3">
                Sorotan Pekan Ini
            </h3>

            <h4 class="text-2xl font-semibold mb-3">
                Nur Akmal Harumkan Unimal di Ajang Duta Baca
            </h4>

            <p class="text-gray-600 leading-8">
                Nur Akmal, mahasiswa Program Studi Teknik Informatika,
                sukses meraih gelar Duta Baca Unimal 2025 Wakil III
                dalam ajang bergengsi yang digelar
                UPT Perpustakaan Universitas Malikussaleh.
            </p>

            <a
                href="https://share.google/Oe2JAuSMuqPZwCtgz"
                target="_blank"
                class="inline-block mt-6 bg-[#7a5134] text-white px-5 py-3 rounded-xl hover:bg-[#5b3b1c] transition">
                Baca Selengkapnya
            </a>

        </div>

        {{-- Berita Kedua --}}
        <div class="bg-white rounded-3xl p-8 shadow-sm">

            <h4 class="text-2xl font-semibold mb-3">
                Gandeng Duta Humas dan Ruang Aksara,
                Duta Baca Unimal Meriahkan Festival Literasi Aceh Utara
            </h4>

            <p class="text-gray-600 leading-8">
                Duta Baca Universitas Malikussaleh (Unimal)
                berkolaborasi dengan Duta Humas Unimal dan
                komunitas literasi Ruang Aksara ikut memeriahkan
                Festival Literasi Kabupaten Aceh Utara tahun 2025.
            </p>

            <a
                href="https://news.unimal.ac.id/index/single/7205/gandeng-duta-humas-dan-ruang-aksara-duta-baca-unimal-meriahkan-festival-literasi-aceh-utara"
                target="_blank"
                class="inline-block mt-6 bg-[#7a5134] text-white px-5 py-3 rounded-xl hover:bg-[#5b3b1c] transition">
                Baca Selengkapnya
            </a>
</div>
         {{-- Berita Ketiga --}}
         <div class="bg-white rounded-3xl p-8 shadow-sm">

            <h4 class="text-2xl font-semibold mb-3">
                Mahasiswa Teknik Unimal Raih Juara 
                Harapan III Duta Baca Aceh Utara 2025
            </h4>

            <p class="text-gray-600 leading-8">
                Pemilihan Duta Baca tingkat daerah 
                Kabupaten/Kota tahun 2025 yang digelar 
                Dinas Perpustakaan dan Kearsipan Kabupaten 
                Aceh Utara berlangsung sukses dan mendapat 
                antusiasme tinggi dari peserta maupun masyarakat 
                pemerhati literasi.
            </p>

            <a
                href="https://news.unimal.ac.id/index/single/7409/mahasiswa-teknik-unimal-raih-juara-harapan-iii-duta-baca-aceh-utara-2025"
                target="_blank"
                class="inline-block mt-6 bg-[#7a5134] text-white px-5 py-3 rounded-xl hover:bg-[#5b3b1c] transition">
                Baca Selengkapnya
            </a>

        

        </div>
         {{-- Berita empat --}}
         <div class="bg-white rounded-3xl p-8 shadow-sm">

            <h4 class="text-2xl font-semibold mb-3">
                Mahasiswa Informatika Unimal Tampil 
                di Ajang Literasi dan Bahasa, Perkuat 
                Peran sebagai Duta Baca dan Duta Bahasa

            </h4>

            <p class="text-gray-600 leading-8">
                Kiprah mahasiswa Program Studi Teknik Informatika, 
                Jurusan Informatika, Universitas Malikussaleh kembali 
                terlihat dalam penguatan budaya literasi dan bahasa 
                melalui partisipasi serta prestasi di berbagai ajang strategis
            </p>

            <a
                href="https://informatika.unimal.ac.id/berita/mahasiswa-informatika-unimal-tampil-di-ajang-literasi-dan-bahasa-perkuat-peran-sebagai-duta-baca-dan-duta-bahasa"
                target="_blank"
                class="inline-block mt-6 bg-[#7a5134] text-white px-5 py-3 rounded-xl hover:bg-[#5b3b1c] transition">
                Baca Selengkapnya
            </a>

        

        </div>

    </div>

    {{-- Aktivitas --}}
    <div class="bg-white rounded-3xl p-8 shadow-sm">

        <h3 class="text-xl font-bold text-[#5b3b1c] mb-6">
            Aktivitas Terbaru
        </h3>

        <div class="space-y-4">

            <div class="border-b pb-3">
                Karya baru dikirim oleh Siti Aisyah
            </div>

            <div class="border-b pb-3">
                Review baru diberikan oleh Ahmad Fauzan
            </div>

            <div>
                Publikasi “Ruang Baca” diterbitkan
            </div>

        </div>

    </div>

</div>

@endsection