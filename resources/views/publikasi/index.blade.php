@extends('layouts.app')

@section('title', 'Publikasi')

@section('content')

<style>
.kategori-btn{
    padding:10px 22px;
    border-radius:9999px;
    background:#f3f4f6;
    color:#374151;
    font-weight:500;
    transition:.3s;
}

.kategori-btn:hover{
    background:#c89d78;
    color:white;
}

.kategori-btn.active{
    background:#7a5134;
    color:white;
}

.floating-btn{
    position: fixed;
    right: 30px;
    bottom: 30px;
    z-index: 9999;

    display: flex;
    align-items: center;
    gap: 10px;
    padding: 14px 22px;
    color: white;
    text-decoration: none;
    font-weight: 200;
    border-radius: 15px;
    background: linear-gradient(135deg, #6a452b, #b78661);
    box-shadow: 0 10px 25px rgba(0,0,0,.15);
    
    transition: all .3s ease, bottom .15s ease-out;
}

/* Tampilan Tombol Pagination < dan > / Previous dan Next Cokelat-Putih Sempurna */
.pagination-wrapper nav {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
}

.pagination-wrapper nav a, 
.pagination-wrapper nav span,
.pagination-wrapper nav button {
    padding: 10px 24px !important;
    border-radius: 12px !important;
    border: 1px solid #e5e7eb !important;
    background-color: white !important;
    color: #7a5134 !important;
    font-weight: 600 !important;
    transition: all 0.3s ease;
    text-decoration: none !important;
    display: inline-flex !important;
    align-items: center;
}

.pagination-wrapper nav a:hover,
.pagination-wrapper nav button:hover {
    background-color: #7a5134 !important;
    color: white !important;
    border-color: #7a5134 !important;
}

.pagination-wrapper p {
    display: none !important;
}
</style>

{{-- Kategori + Search --}}
<div class="bg-white rounded-3xl p-6 shadow-sm mb-8">
    <div class="flex flex-col md:flex-row justify-between gap-4">
        <div class="flex flex-wrap gap-3">
            <a href="{{ route('publikasi.index') }}" class="kategori-btn active">Semua</a>
            <a href="{{ route('publikasi.puisi') }}" class="kategori-btn">Puisi</a>
            <a href="{{ route('publikasi.cerpen') }}" class="kategori-btn">Cerpen</a>
            <a href="{{ route('publikasi.pantunquotes') }}" class="kategori-btn">Pantun & Quotes</a>
        </div>

        <form action="{{ route('publikasi.index') }}" method="GET" class="flex gap-2">
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari judul atau penulis..."
                class="border rounded-xl px-4 py-2 w-full md:w-72"
            >
            <button type="submit" class="px-4 py-2 bg-[#7a5134] text-white rounded-xl">
                Cari
            </button>
        </form>
    </div>
</div>

@php
    $featured = $publikasi->first();
@endphp

{{-- ─── BAGIAN ATAS: HANYA MUNCUL DI HALAMAN 1 ─── --}}
@if($publikasi->onFirstPage() && $featured)

<div class="grid lg:grid-cols-3 gap-6 mb-10 items-stretch">

    {{-- Featured (Card Besar) --}}
    <div class="lg:col-span-2 flex">
        <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition flex flex-col w-full justify-between">
            <div>
                <img
                    src="{{ asset('storage/covers/cover'.(($featured->id % 24) + 1).'.jpg') }}"
                    class="w-full h-[250px] object-cover"
                >
                <div class="p-6 pb-0">
                    <span class="bg-[#F5E8D5] text-[#5B371E] px-3 py-1 rounded-full text-sm">
                        {{ $featured->kategori }}
                    </span>
                    <h2 class="text-3xl font-bold text-[#5B371E] mt-4 line-clamp-2">
                        {{ $featured->judul }}
                    </h2>
                    <p class="text-gray-500 mt-2">
                        Oleh {{ $featured->user->name ?? 'Anonim' }} • {{ $featured->created_at->format('d M Y') }}
                    </p>
                    <p class="text-gray-600 mt-4 line-clamp-3">
                        {{ $featured->deskripsi ?: 'Karya mahasiswa yang telah lolos review.' }}
                    </p>
                </div>
            </div>
            
            <div class="p-6 pt-4">
                <a
                    href="{{ asset('storage/'.$featured->file) }}"
                    target="_blank"
                    class="inline-block bg-[#5B371E] text-white px-6 py-3 rounded-xl hover:bg-[#704829]"
                >
                    Baca →
                </a>
            </div>
        </div>
    </div>

    {{-- 2 Card Kecil Samping --}}
    <div class="flex flex-col gap-4 justify-between h-full">
        @foreach($publikasi->skip(1)->take(2) as $karya)
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:-translate-y-1 hover:shadow-lg transition flex flex-col justify-between flex-1">
            <div>
                <img
                    src="{{ asset('storage/covers/cover'.(($karya->id % 24) + 1).'.jpg') }}"
                    class="w-full h-24 object-cover"
                >
                <div class="p-4 pb-0">
                    <span class="text-xs text-[#7a5134] block">
                        {{ $karya->kategori }}
                    </span>
                    <h3 class="font-semibold text-[#5B371E] mt-1 line-clamp-2">
                        {{ $karya->judul }}
                    </h3>
                    <p class="text-gray-500 text-sm mt-1">
                        {{ $karya->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
            <div class="p-4 pt-2">
                <a
                    href="{{ asset('storage/'.$karya->file) }}"
                    target="_blank"
                    class="inline-block text-[#7a5134] text-sm font-medium hover:underline"
                >
                    Baca →
                </a>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endif

{{-- ─── BAGIAN BAWAH: CARD LANJUTAN ─── --}}
<div class="grid md:grid-cols-3 gap-5 items-stretch">

    @foreach($publikasi as $key => $karya)
        @if($publikasi->onFirstPage() && $key < 3)
            @continue
        @endif

        <div class="bg-white rounded-2xl p-5 shadow-sm hover:-translate-y-1 hover:shadow-lg transition border-l-4 border-[#7a5134] flex flex-col justify-between">
            <div>
                <span class="text-xs text-[#7a5134]">
                    {{ $karya->kategori }}
                </span>
                <h3 class="font-bold text-lg text-[#5B371E] mt-2 line-clamp-2">
                    {{ $karya->judul }}
                </h3>
                <p class="text-gray-500 text-sm mt-2">
                    Oleh {{ $karya->user->name ?? 'Anonim' }}
                </p>
                <p class="text-gray-400 text-sm">
                    {{ $karya->created_at->format('d M Y') }}
                </p>
            </div>
            
            <div class="mt-4 pt-2">
                <a
                    href="{{ asset('storage/'.$karya->file) }}"
                    target="_blank"
                    class="inline-flex text-[#7a5134] font-medium hover:underline"
                >
                    Baca →
                </a>
            </div>
        </div>
    @endforeach

</div>

{{-- Pembungkus Pagination --}}
<div class="mt-12 mb-6 pagination-wrapper">
    {{ $publikasi->links() }}
</div>

{{-- Tombol Floating --}}
<a href="{{ route('kirim-karya.index') }}" class="floating-btn" id="floatingSubmitBtn">
    <span>Kirim Karyamu Sekarang -></span>
</a>

{{-- Script Pengunci Posisi Tepat di Batas Bawah Area Putih --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const btn = document.getElementById("floatingSubmitBtn");
        
        if (btn) {
            window.addEventListener("scroll", function () {
                const totalPageHeight = document.documentElement.scrollHeight;
                const scrolledFromTop = window.innerHeight + window.scrollY;
                const distanceToBottom = totalPageHeight - scrolledFromTop;

                if (distanceToBottom < 180) { 
                    btn.style.bottom = (200 - distanceToBottom) + "px";
                } else {
                    btn.style.bottom = "30px";
                }
            });
        }
    });
</script>

@endsection