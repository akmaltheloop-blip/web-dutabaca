@extends('layouts.app')

@section('title', 'Publikasi')

@section('content')

<style>
.kategori-btn{
    padding: 10px 22px;
    border-radius: 9999px;
    background: #f3f4f6;
    color: #374151;
    font-weight: 500;
    cursor: pointer;
    transition: all .3s ease;
    text-decoration: none;
}

.kategori-btn:hover{
    background: #c89d78;
    color: white;
    transform: translateY(-4px);
    box-shadow: 0 8px 20px rgba(122,81,52,.25);
}

.kategori-btn.active{
    background: #7a5134;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(122,81,52,.35);
}

.kategori-btn.active:hover{
    background: #8b5d3c;
}
</style>

{{-- Header --}}
<div class="mb-8">

    <h2 class="text-3xl font-bold text-[#5b3b1c]">
        Publikasi
    </h2>

    <p class="text-gray-500 mt-2">
        Temukan berbagai karya mahasiswa.
    </p>

</div>

{{-- Kategori + Search --}}
<div class="bg-white rounded-3xl p-6 shadow-sm mb-8">

            <div class="flex flex-col md:flex-row justify-between gap-4">

            <div class="flex flex-wrap gap-3">

            <a href="{{ route('publikasi.index') }}" class="kategori-btn active">
                Semua
            </a>

            <a href="{{ route('publikasi.puisi') }}" class="kategori-btn">
                Puisi
            </a>

            <a href="{{ route('publikasi.cerpen') }}" class="kategori-btn">
                Cerpen
            </a>

            <a href="{{ route('publikasi.pantunquotes') }}" class="kategori-btn">
                Pantun & Quotes
            </a>

        </div>

        <input
            type="text"
            placeholder="Cari judul atau penulis..."
            class="border rounded-xl px-4 py-2 w-full md:w-72"
        >
    </div>

</div>

@php
    $featured = $publikasi->first();
@endphp

@if($featured)

{{-- Featured + Side Cards --}}
<div class="grid lg:grid-cols-3 gap-6 mb-10">

    {{-- Featured --}}
    <div class="lg:col-span-2">

        <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 h-full">

            <div class="w-full h-[220px] bg-[#F5E8D5] flex items-center justify-center">

                <span class="text-[#5B371E] font-medium">
                    Belum Ada Cover
                </span>

            </div>

            <div class="p-6">

                <span class="bg-[#F5E8D5] text-[#5B371E] px-3 py-1 rounded-full text-sm">
                    {{ $featured->kategori }}
                </span>

                <h2 class="text-3xl font-bold text-[#5B371E] mt-4">
                    {{ $featured->judul }}
                </h2>

                <p class="text-gray-500 mt-2">
                    Oleh {{ $featured->user->name }}
                    •
                    {{ $featured->created_at->format('d M Y') }}
                </p>

                <p class="text-gray-600 mt-4">
                    {{ $featured->deskripsi ?: 'Karya mahasiswa yang telah lolos review.' }}
                </p>

                <a
                    href="{{ asset('storage/'.$featured->file) }}"
                    target="_blank"
                    class="inline-block mt-6 bg-[#5B371E] text-white px-6 py-3 rounded-xl hover:bg-[#704829] transition"
                >
                    Baca →
                </a>

            </div>

        </div>

    </div>

    {{-- 2 Card Kecil --}}
    <div class="flex flex-col gap-4">

        @foreach($publikasi->skip(1)->take(2) as $karya)

        <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:-translate-y-2 hover:shadow-xl transition duration-300">

            <div class="w-full h-36 bg-[#F5E8D5] flex items-center justify-center">

                <span class="text-[#5B371E] text-sm">
                    Belum Ada Cover
                </span>

            </div>

            <div class="p-4">

                <span class="text-xs text-[#7a5134]">
                    {{ $karya->kategori }}
                </span>

                <h3 class="font-semibold text-[#5B371E] mt-1">
                    {{ $karya->judul }}
                </h3>

                <p class="text-gray-500 text-sm mt-1">
                    {{ $karya->created_at->format('d M Y') }}
                </p>

                <a
                    href="{{ asset('storage/'.$karya->file) }}"
                    target="_blank"
                    class="inline-block mt-2 text-[#7a5134] text-sm font-medium"
                >
                    Baca →
                </a>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endif

{{-- Card Lanjutan --}}
<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">

    @foreach($publikasi->skip(3) as $karya)

    <div class="bg-white rounded-2xl p-5 shadow-sm hover:-translate-y-2 hover:shadow-xl transition duration-300">

        <span class="text-xs text-[#7a5134] font-medium">
            {{ $karya->kategori }}
        </span>

        <h3 class="font-bold text-lg text-[#5B371E] mt-2">
            {{ $karya->judul }}
        </h3>

        <p class="text-gray-500 text-sm mt-2">
            Oleh {{ $karya->user->name }}
        </p>

        <p class="text-gray-400 text-sm">
            {{ $karya->created_at->format('d M Y') }}
        </p>

        <a
            href="{{ asset('storage/'.$karya->file) }}"
            target="_blank"
            class="inline-flex items-center mt-4 text-[#7a5134] font-medium hover:translate-x-1 transition"
        >
            Baca →
        </a>

    </div>

    @endforeach

</div>

<div class="mt-12 flex justify-center">

    <a
        href="{{ route('kirim-karya.index') }}"
        class="
        px-5 py-3
        rounded-xl
        bg-[#7a5134]
        text-white
        text-sm
        hover:bg-[#8b5d3c]
        hover:-translate-y-1
        hover:shadow-md
        transition-all duration-300
        "
    >
        Kirim Karyamu Sekarang Juga →
    </a>

</div>

@endsection