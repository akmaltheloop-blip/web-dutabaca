@php
use Illuminate\Support\Str;
@endphp

@extends('layouts.app')

@section('title', 'Puisi')

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

<div class="mb-8">

    <h2 class="text-3xl font-bold text-[#5b3b1c]">
        Puisi
    </h2>

<div class="bg-white rounded-3xl p-6 shadow-sm mb-8">

    <div class="flex flex-wrap gap-3">

        <a href="{{ route('publikasi.index') }}"
           class="kategori-btn">
            Semua
        </a>

        <a href="{{ route('publikasi.puisi') }}"
           class="kategori-btn active">
            Puisi
        </a>

        <a href="{{ route('publikasi.cerpen') }}"
           class="kategori-btn">
            Cerpen
        </a>

        <a href="{{ route('publikasi.pantunquotes') }}"
           class="kategori-btn">
            Pantun & Quotes
        </a>

    </div>

</div>

    <p class="text-gray-500 mt-2">
        Kumpulan karya puisi mahasiswa.
    </p>

</div>

@if($karyas->count())

<div class="grid md:grid-cols-2 gap-6">

    @foreach($karyas as $karya)

    <div class="bg-white rounded-2xl p-6 shadow-sm hover:-translate-y-2 hover:shadow-xl transition duration-300">

        <span class="inline-block px-3 py-1 text-xs rounded-full bg-[#F5E8D5] text-[#5B371E]">
            {{ $karya->kategori }}
        </span>

        <h3 class="text-xl font-bold text-[#5B371E] mt-4">
            {{ $karya->judul }}
        </h3>

        <p class="text-gray-500 text-sm mt-2">
            Oleh {{ $karya->user->name }}
        </p>

        <p class="text-gray-400 text-sm">
            {{ $karya->created_at->format('d M Y') }}
        </p>

        @if($karya->deskripsi)
        <p class="text-gray-600 mt-4">
            {{ Str::limit($karya->deskripsi, 120) }}
        </p>
        @endif

        <a
            href="{{ asset('storage/'.$karya->file) }}"
            target="_blank"
            class="inline-flex items-center mt-5 text-[#7a5134] font-semibold hover:translate-x-1 transition"
        >
            Baca →
        </a>

    </div>

    @endforeach

</div>

@else

<div class="bg-white rounded-2xl p-8 text-center shadow-sm">

    <h3 class="text-xl font-semibold text-[#5B371E]">
        Belum Ada Karya
    </h3>

    <p class="text-gray-500 mt-2">
        Belum ada karya puisi yang dipublikasikan.
    </p>

</div>

@endif

@endsection