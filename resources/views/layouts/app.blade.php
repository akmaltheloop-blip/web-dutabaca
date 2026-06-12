<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css','resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <title>Duta Baca</title>
    <style>
.swiper {
    overflow: hidden;
    padding: 15px 0 30px;
}

.swiper-wrapper {
    align-items: stretch;
}

.swiper-slide {
    height: auto;
}
</style>

</head>


<body class="bg-[#fcf9f8] text-gray-800 font-[Inter]">

    {{-- Sidebar --}}
    <aside class="fixed left-0 top-0 h-screen w-64 bg-[#fff1] border-r border-[#eee] hidden md:flex flex-col shadow-sm">

        <div class="p-6 border-b">
    <h1 class="font-[Poppins] text-[#5b3b1c] text-3xl font-bold">
        Duta Baca
    </h1>

    <p class="font-[Montserrat] text-xs text-[#482d13] uppercase mt-1">
        Universitas Malikussaleh
    </p>
</div>
        <nav class="flex-1 p-4 space-y-2">

            {{-- Dashboard --}}
           <a href="{{ route('dashboard') }}"
             class="font-[Montserrat] block px-4 py-3 rounded-xl transition
             {{ request()->routeIs('dashboard') ? 'bg-[#ffd13b] font-extrabold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
              Dashboard
            </a>

            <a href="{{ route('publikasi.index') }}"
             class="font-[Montserrat] block px-4 py-3 rounded-xl transition
             {{ request()->routeIs('publikasi.*') ? 'bg-[#ffd13b] font-extrabold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
           Publikasi
            </a>

            {{--Kirim Karya--}}
            <a href="{{ route('kirim-karya.index') }}"
             class="font-[Montserrat] block px-4 py-3 rounded-xl transition
             {{ request()->routeIs('kirim-karya.*') ? 'bg-[#ffd13b] font-extrabold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
              Kirim Karya
            </a>

            {{-- penilaian --}}
            <a href="{{ route('penilaian.index') }}"
               class="font-[Montserrat] block px-4 py-3 rounded-xl hover:bg-[#f7f1e8] transition
               {{ request()->routeIs('penilaian.*') ? 'bg-[#ffd13b] font-extrabold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
                Penilaian
            </a>

            {{-- Profil --}}
            <a href="{{ route('profil.index') }}"
            class="font-[Montserrat] block px-4 py-3 rounded-xl transition
              {{ request()->routeIs('profil.*') ? 'bg-[#ffd13b] font-extrabold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
             Profil
            </a>
        </nav>

    </aside>


    {{-- Main --}}
    <main class="md:ml-64 min-h-screen flex flex-col">


    <div class="p-8 flex-1">
        @yield('content')
    </div>

    <footer class="bg-[#6d462a] border-t border-[#6d462a] mt-20 py-4 text-center">

    <h3 class="font-[poppins] text-2xl font-bold text-[#f7f5f3] mb-6">
        Kontak Kami
    </h3>

    <div class="flex justify-center gap-8 text-[#f7f1e8] -600 flex-wrap">

        <a href="https://www.instagram.com/dutabaca_unimal?igsh=MW16bGV3dXBzM3cwOA=="
           target="_blank"
           class="font-[montserrat] hover:text-black">
             Instagram
        </a>

        <a href="#"
           class="font-[montserrat] hover:text-black">
            🌐 Website
        </a>

        <a href="https://wa.me/085191365955"
           class="font-[montserrat] hover:text-black">
            ✉️ Whatsapp
        </a>

    </div>

    <p class="font-[poppins] mt-6 text-lg text-[#f7f1e8] -400">
        © {{ date('Y') }} Duta Baca Universitas Malikussaleh
    </p>

</footer>

</main>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
const swiper = new Swiper(".beritaSwiper", {
    slidesPerView: 1,
    spaceBetween: 20,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },

    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});
</script>
</body>
</html>