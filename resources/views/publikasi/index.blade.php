@extends('layouts.app')

@section('title', 'Publikasi')

@section('content')

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

            <div class="flex gap-3">

<button class="kategori-btn active">
    Semua
</button>

<button class="kategori-btn">
    Cerpen
</button>

<button class="kategori-btn">
    Puisi
</button>

<button class="kategori-btn">
    Pantun & Quotes
</button>

</div>

        </div>

        <input
            type="text"
            placeholder="Cari judul atau penulis..."
            class="border rounded-xl px-4 py-2 w-full md:w-72"
        >

    </div>

</div>

{{-- Featured + Side Cards --}}
<div class="grid lg:grid-cols-3 gap-6 mb-10">

    {{-- Featured Card --}}
    <div class="lg:col-span-2">

        <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 h-full">

            <img
                src="https://picsum.photos/1200/700"
                class="w-full h-[200px] object-cover"
            >

            <div class="p-6">

                <span class="bg-[#F5E8D5] text-[#5B371E] px-3 py-1 rounded-full text-sm">
                    Cerpen
                </span>

                <h2 class="text-3xl font-bold text-[#5B371E] mt-4">
                    Judul Publikasi Terbaru
                </h2>

                <p class="text-gray-500 mt-2">
                    Oleh Miranda Yeppo • 8 Juni 2026
                </p>

                <p class="text-gray-600 mt-4">
                    Ini adalah deskripsi singkat publikasi terbaru yang akan menarik minat pembaca untuk membuka karya secara lengkap.
                </p>

                <a href="#"
                   class="inline-block mt-6 bg-[#5B371E] text-white px-6 py-3 rounded-xl hover:bg-[#704829] transition">

                    Baca Selengkapnya

                </a>

            </div>

        </div>

    </div>

    {{-- 2 Card Kecil --}}
<div class="flex flex-col gap-4">

    @for($i = 1; $i <= 2; $i++)

    <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:-translate-y-2 hover:shadow-xl transition duration-300">

        <img
            src="https://picsum.photos/400/{{ 250 + $i }}"
            class="w-full h-36 object-cover"
        >

        <div class="p-3">

            <h3 class="font-semibold text-[#5B371E]">
                Judul Karya {{ $i }}
            </h3>

            <p class="text-gray-500 text-sm mt-1">
                7 Juni 2026
            </p>

        </div>

    </div>

    @endfor

    </div>

</div>

{{-- Card Lanjutan --}}
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

    @for($i = 3; $i <= 8; $i++)

    <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:-translate-y-2 hover:shadow-xl transition duration-300">

        <img
            src="https://picsum.photos/400/{{ 500 + $i }}"
            class="w-full h-48 object-cover"
        >

        <div class="p-4">

            <h3 class="font-bold text-lg text-[#5B371E]">
                Judul Karya {{ $i }}
            </h3>

            <p class="text-gray-500 text-sm mt-2">
                {{ $i }} Juni 2026
            </p>

        </div>

    </div>

    @endfor

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const buttons = document.querySelectorAll('.kategori-btn');

    buttons.forEach(button => {

        button.addEventListener('click', function () {

            buttons.forEach(btn => {


                btn.classList.remove(
                    'bg-[#7a5134]',
                    'text-white',
                    'shadow-md'
                );

                btn.classList.add(
                    'bg-gray-100',
                    'text-gray-700'
                );

            });

            this.classList.remove(
                'bg-gray-100',
                'text-gray-700'
            );

            this.classList.add(
                'bg-[#7a5134]',
                'text-white',
                'shadow-md'
            );

        });

    });

});
</script>

<div class="mt-12 flex justify-center">

    <a href="{{ route('kirim-karya.index') }}"
       class="
       px-4 py-2
       rounded-xl

       bg-[#7a5134]
       text-white
       text-sm

       hover:bg-[#8b5d3c]
       hover:-translate-y-1
       hover:shadow-md

       transition-all duration-300
       ">

        Kirim Karyamu Sekarang Juga →

    </a>

</div>
@endsection