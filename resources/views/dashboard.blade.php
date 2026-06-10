@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

{{-- Header --}}
<div data-aos="fade-down"
     class="flex justify-between items-center pb-3 shadow-sm">

    <div class="flex items-center gap-4">

        <img
            src="{{ asset('images/logo-dutabaca.png') }}"  
            alt="Logo Duta Baca"
            class="w-16 h-16 object-contain">  

        <div>
            <h2 class="font-[Poppins] text-2xl font-bold text-[#5b3b1c]">
                Duta Baca
            </h2>

            <p class="font-[Montserrat] text-[#482d13] text-sm">
                UNIVERSITAS MALIKUSSALEH
            </p>
        </div>

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

        <h3 class="font-[Lora] text-4xl font-bold mb-3">
            Selamat Datang,
            <br>Sobat Literasi!
        </h3>

        <p class="text-lg opacity-90 mb-6">
            Wadah literasi mahasiswa untuk berbagi karya,
            publikasi, dan budaya membaca di lingkungan kampus.
        </p>

        <div class="flex gap-4">

           <a href="#tentang-kami"
             class="font-[Montserrat] bg-white text-[#5b3b1c] px-5 py-3 rounded-xl font-extrabold">
                 Tentang Kami
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

        {{-- Slider Berita --}}
<div class="swiper beritaSwiper">

    <div class="swiper-wrapper">

        {{-- Berita 1 --}}
        <div class="swiper-slide">
            <div class="bg-white rounded-2xl p-5 shadow-lg h-[280px] flex flex-col">
                <h4 class="font-[Cinzel] text-lg font-semibold mb-2">
                Nur Akmal Harumkan Unimal di Ajang Duta Baca
            </h4>

            <p class="text-sm text-gray-600 leading-6 line-clamp-3">
                Nur Akmal, mahasiswa Program Studi Teknik Informatika 
                sukses meraih gelar Duta Baca Unimal 2025 Wakil III...
            </p>
            <a href="https://news.unimal.ac.id/index/single/7731/empat-duta-baca-unimal-raih-prestasi-pada-lomba-video-konten-literasi-aceh-utara"
               target="_blank"
               class="inline-block mt-auto px-5 py-3 rounded-xl
               bg-gradient-to-r from-[#7a5134] to-[#c59a77]
               text-white font-semibold
               transition-all duration-300
               hover:shadow-xl
               hover:-translate-y-1">
                Baca Selengkapnya
            </a>
        </div>
        </div>

        {{-- Berita 2 --}}
        <div class="swiper-slide">
            <div class="bg-white rounded-2xl p-5 shadow-lg h-[280px] flex flex-col">

         <h4 class="font-[Cinzel] text-lg font-semibold mb-2">
                Gandeng Duta Humas dan Ruang Aksara,
                Duta Baca Unimal Meriahkan Festival..
            </h4>

             <p class="text-sm text-gray-600 leading-6 line-clamp-3">
                Duta Baca Universitas Malikussaleh (Unimal)
                berkolaborasi dengan...
            </p>

            <a href="https://news.unimal.ac.id/index/single/7205/gandeng-duta-humas-dan-ruang-aksara-duta-baca-unimal-meriahkan-festival-literasi-aceh-utara"
               target="_blank"
               class="inline-block mt-auto px-5 py-3 rounded-xl
               bg-gradient-to-r from-[#7a5134] to-[#c59a77]
               text-white font-semibold
               transition-all duration-300
               hover:shadow-xl
               hover:-translate-y-1">
                Baca Selengkapnya
            </a>

         </div>
        </div>

        {{-- Berita 3 --}}
        <div class="swiper-slide">
            <div class="bg-white rounded-2xl p-5 shadow-lg h-[280px] flex flex-col">

            <h4 class="font-[Cinzel] text-lg font-semibold mb-2">
               Mahasiswa Teknik Unimal Raih Juara 
                Harapan III Duta Baca Aceh..
            </h4>
            
            <p class="text-sm text-gray-600 leading-6 line-clamp-3">
                Pemilihan Duta Baca tingkat daerah 
                Kabupaten/Kota tahun 2025
            </p>
             <a href="https://news.unimal.ac.id/index/single/7409/mahasiswa-teknik-unimal-raih-juara-harapan-iii-duta-baca-aceh-utara-2025"
               target="_blank"
               class="inline-block mt-auto px-5 py-3 rounded-xl
               bg-gradient-to-r from-[#7a5134] to-[#c59a77]
               text-white font-semibold
               transition-all duration-300
               hover:shadow-xl
               hover:-translate-y-1">
                Baca Selengkapnya
            </a>

       </div>
        </div>

        {{-- Berita 4 --}}
        <div class="swiper-slide">
            <div class="bg-white rounded-2xl p-5 shadow-lg h-[280px] flex flex-col">

            <h4 class="font-[Cinzel] text-lg font-semibold mb-2">
               Mahasiswa Informatika Unimal Tampil 
                di Ajang Literasi dan..
            </h4>

           <p class="text-sm text-gray-600 leading-6 line-clamp-3">
                Kiprah mahasiswa Program Studi Teknik Informatika, 
                Jurusan Informatika...
            </p>

            <a href="https://informatika.unimal.ac.id/berita/mahasiswa-informatika-unimal-tampil-di-ajang-literasi-dan-bahasa-perkuat-peran-sebagai-duta-baca-dan-duta-bahasa"
               target="_blank"
               class="inline-block mt-auto px-5 py-3 rounded-xl
               bg-gradient-to-r from-[#7a5134] to-[#c59a77]
               text-white font-semibold
               transition-all duration-300
               hover:shadow-xl
               hover:-translate-y-1">
                Baca Selengkapnya
            </a>
        </div>
         </div>
    </div>
     {{-- Titik-titik --}}
    <div class="swiper-pagination mt-4"></div>
</div>

    </div>
    {{-- Visi & Misi --}}
<div id="tentang-kami" class="space-y-6 mt-10">

    {{-- Visi --}}
    <div
        data-aos="fade-right"
        class="bg-white rounded-3xl p-8 shadow-xl">

        <h3 class="font-[Lora] text-2xl font-bold text-[#5b3b1c] mb-4">
            Visi
        </h3>

        <p class="text-black leading-8">
            Menjadi pelopor budaya literasi di lingkungan
            Universitas Malikussaleh yang kreatif, inovatif,
            dan berdaya saing dalam meningkatkan minat baca,
            menulis, serta pengembangan ilmu pengetahuan.
        </p>

    </div>

    {{-- Misi --}}
    <div
        data-aos="fade-left"
        class="bg-white rounded-3xl p-8 shadow-xl">

        <h3 class="font-[Lora] text-2xl font-bold text-[#5b3b1c] mb-4">
            Misi
        </h3>

        <ul class="list-disc pl-5 text-black leading-8 space-y-2">
            <li>Meningkatkan budaya membaca di kalangan mahasiswa.</li>
            <li>Mendorong lahirnya karya tulis yang berkualitas.</li>
            <li>Menjadi wadah pengembangan literasi kampus.</li>
            <li>Membangun kolaborasi dengan komunitas literasi.</li>
            <li>Menyebarluaskan informasi dan publikasi ilmiah.</li>
        </ul>

    </div>

</div>

    

</div>

<script>
new Swiper(".beritaSwiper", {
    slidesPerView: 1,
    spaceBetween: 20,

    grabCursor: true,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    autoplay: {
        delay: 4000,    
        disableOnInteraction: false,
    },

    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        }
    }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection