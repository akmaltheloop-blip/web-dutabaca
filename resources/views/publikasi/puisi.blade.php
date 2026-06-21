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

.floating-btn{
    position: fixed;
    right: 30px;
    bottom: 90px;
    z-index: 9999;

    display: flex;
    align-items: center;
    gap: 10px;

    padding: 14px 22px;

    color: white;
    text-decoration: none;
    font-weight: 200;

    border-radius: 15px;

    background: linear-gradient(
        135deg,
        #6a452b,
        #b78661
    );

    box-shadow: 0 10px 25px rgba(0,0,0,.15);

    transition: all .3s ease;
}

.floating-btn:hover{
    transform: translateY(-4px);
    box-shadow: 0 15px 35px rgba(122,81,52,.35);
}

.floating-btn .icon{
    font-size: 20px;
    transition: transform .3s ease;
}

.floating-btn:hover .icon{
    transform: rotate(-10deg);
}

/* Memaksa SEMUA tombol (baik link maupun teks biasa) berwarna putih-cokelat */
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

/* Efek Hover: Hanya tombol yang aktif (bisa diklik) yang berubah jadi cokelat saat didekati mouse */
.pagination-wrapper nav a:hover,
.pagination-wrapper nav button:hover {
    background-color: #7a5134 !important;
    color: white !important;
    border-color: #7a5134 !important;
}

/* Menyembunyikan teks hitungan "Showing Z to X..." agar tidak mengganggu layout */
.pagination-wrapper p {
    display: none !important;
}

</style>

{{-- Header --}}
<div class="mb-8">
    <h2 class="text-3xl font-bold text-[#5b3b1c]">
        Puisi
    </h2>
    <p class="text-gray-500 mt-2">
        Kumpulan karya puisi mahasiswa.
    </p>
</div>

{{-- Kategori Tabs --}}
<div class="bg-white rounded-3xl p-6 shadow-sm mb-8">
    <div class="flex flex-wrap gap-3">
        <a href="{{ route('publikasi.index') }}" class="kategori-btn">Semua</a>
        <a href="{{ route('publikasi.puisi') }}" class="kategori-btn active">Puisi</a>
        <a href="{{ route('publikasi.cerpen') }}" class="kategori-btn">Cerpen</a>
        <a href="{{ route('publikasi.pantunquotes') }}" class="kategori-btn">Pantun & Quotes</a>
    </div>
</div>

{{-- Content Grid --}}
@if($karyas->count())

<div class="grid md:grid-cols-3 gap-5 items-stretch"> {{-- items-stretch membuat tinggi card per-baris sama rata --}}

    @foreach($karyas as $karya)

    {{-- Ditambahkan flex flex-col justify-between dan border-l-4 agar sama persis dengan halaman depan --}}
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

            @if($karya->deskripsi)
            <p class="text-gray-600 text-sm mt-3 line-clamp-3">
                {{ $karya->deskripsi }}
            </p>
            @endif
        </div>

        {{-- Tombol Baca dibungkus div terpisah agar posisinya selalu mengunci di paling bawah card --}}
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

{{-- Pembungkus Pagination --}}
<div class="mt-12 mb-6 pagination-wrapper">
    {{ $karyas->links() }}
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
                // Rumus matematika untuk mencari sisa jarak ke bawah halaman (Jangan sampai kehapus)
                const totalPageHeight = document.documentElement.scrollHeight;
                const scrolledFromTop = window.innerHeight + window.scrollY;
                const distanceToBottom = totalPageHeight - scrolledFromTop;

                // Eksekusi ngerem dengan angka baru biar gak terlalu ngambang
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