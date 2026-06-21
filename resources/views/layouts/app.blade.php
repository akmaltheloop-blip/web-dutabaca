<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Duta Baca</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

        <style>
.swiper-wrapper {
    align-items: stretch;
}

.swiper-slide {
    height: auto;
    }
.fotoSwiper {
    overflow: hidden;
}

.fotoSwiper .swiper-slide {
    width: 100%;
    height: 250px;
}

.fotoSwiper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>

</head>


<body class="bg-[#fcf9f8] text-gray-800 font-[Inter] overflow-x-hidden">

    {{-- Navbar --}}
    <nav class="bg-white shadow-sm sticky top-0 z-50">

        <div class="max-w-7xl mx-auto px-8 py-4 flex items-center justify-between">

            {{-- Logo --}}
            <div>
                <h1 class="font-[Poppins] text-2xl font-bold text-[#5b3b1c]">
                    DUTA BACA
                </h1>

                <p class="font-[Montserrat] text-xs text-[#482d13] uppercase">
                    Universitas Malikussaleh
                </p>
            </div>

            {{-- Menu --}}
            <div class="flex items-center gap-3">

                <a href="{{ route('dashboard') }}"
                   class="px-4 py-2 rounded-xl transition
                   {{ request()->routeIs('dashboard') ? 'bg-[#ffd13b] font-bold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
                    DASHBOARD
                </a>

                <a href="{{ route('publikasi.index') }}"
                   class="px-4 py-2 rounded-xl transition
                   {{ request()->routeIs('publikasi.*') ? 'bg-[#ffd13b] font-bold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
                    PUBLIKASI
                </a>

                @if(!auth()->check() || auth()->user()->role === 'penulis')
                <a href="{{ route('kirim-karya.index') }}"
                   class="px-4 py-2 rounded-xl transition
                   {{ request()->routeIs('kirim-karya.*') ? 'bg-[#ffd13b] font-bold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
                    KIRIM KARYA
                </a>
                @endif

                @if(auth()->check() && in_array(auth()->user()->role, ['reviewer1','reviewer2']))
                <a href="{{ route('penilaian.index') }}"
                   class="px-4 py-2 rounded-xl transition
                   {{ request()->routeIs('penilaian.*') ? 'bg-[#ffd13b] font-bold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
                    PENILAIAN
                </a>
                @endif

                @if(auth()->check() && auth()->user()->role === 'penulis')
                <a href="{{ route('profil.index') }}"
                   class="px-4 py-2 rounded-xl transition
                   {{ request()->routeIs('profil.*') ? 'bg-[#ffd13b] font-bold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
                    PROFIL
                </a>
                @endif

                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                        class="px-4 py-2 rounded-xl text-red-600 hover:bg-red-50 transition">
                        Logout
                    </button>
                </form> 
                @endauth

            </div>

        </div>

    </nav>

    {{-- Main --}}
    <main class="min-h-screen flex flex-col">

        <div class="p-8 flex-1">
            @yield('content')
        </div>


   <footer class="bg-[#6d462a] mt-6 py-2 text-center">

    <h3 class="font-[Poppins] text-lg font-bold text-[#f7f5f3] mb-2">
        Kontak Kami
    </h3>

    <div class="flex justify-center gap-6 flex-wrap text-[#f7f1e8]">

    <a href="https://www.instagram.com/dutabaca_unimal?igsh=MW16bGV3dXBzM3cwOA=="
       target="_blank"
       class="flex items-center font-bold gap-2 hover:text-black transition">

        <img src="{{ asset('images/logo ig.png') }}"
             alt="Instagram"
             class="w-12 h-12">

        <span>Instagram</span>
    </a>

    <a href="#"
       class="flex items-center font-bold gap-2 hover:text-black transition">

        <img src="{{ asset('images/logo web.png') }}"
             alt="Website"
             class="w-10 h-10">

        <span>Website</span>
    </a>

    <a href="https://wa.me/085191365955"
       class="flex items-center font-bold gap-2 hover:text-black transition">

        <img src="{{ asset('images/logo wa.png') }}"
             alt="Whatsapp"
             class="w-10 h-10">

        <span>Whatsapp</span>
    </a>

</div>

    <p class="mt-2 text-xs text-[#f7f1e8]">
        © {{ date('Y') }} Duta Baca Universitas Malikussaleh
    </p>

    </footer>
    </main>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration:1000,
            once:true
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        new Swiper(".beritaSwiper",{
            slidesPerView:1,
            spaceBetween:20,
            autoplay:{
                delay:2000,
                disableOnInteraction:false
            },
            pagination:{
                el:".swiper-pagination",
                clickable:true
            },
            breakpoints:{
                768:{slidesPerView:2},
                1024:{slidesPerView:3}
            }
        });
    </script>

</body>
</html>