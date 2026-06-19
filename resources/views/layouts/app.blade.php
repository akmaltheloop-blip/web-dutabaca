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

    <link rel="stylesheet"
        href="https://unpkg.com/aos@2.3.4/dist/aos.css" />

</head>

<body class="bg-[#fcf9f8] text-gray-800 font-[Inter]">

    {{-- SIDEBAR --}}
    <aside class="fixed left-0 top-0 h-screen w-64 bg-white border-r border-[#eee] hidden md:flex flex-col shadow-sm">

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
                class="block px-4 py-3 rounded-xl font-[Montserrat] transition
                {{ request()->routeIs('dashboard') ? 'bg-[#ffd13b] font-bold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
                Dashboard
            </a>

            {{-- Publikasi --}}
            <a href="{{ route('publikasi.index') }}"
                class="block px-4 py-3 rounded-xl font-[Montserrat] transition
                {{ request()->routeIs('publikasi.*') ? 'bg-[#ffd13b] font-bold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
                Publikasi
            </a>

            {{-- ================= BELUM LOGIN ================= --}}
            @guest

                <a href="{{ route('kirim-karya.index') }}"
                    class="block px-4 py-3 rounded-xl font-[Montserrat] transition
                    {{ request()->routeIs('kirim-karya.*') ? 'bg-[#ffd13b] font-bold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
                    Kirim Karya
                </a>

            @endguest


            {{-- ================= PENULIS ================= --}}
            @auth

                @if(auth()->user()->role == 'penulis')

                    <a href="{{ route('kirim-karya.index') }}"
                        class="block px-4 py-3 rounded-xl font-[Montserrat] transition
                        {{ request()->routeIs('kirim-karya.*') ? 'bg-[#ffd13b] font-bold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
                        Kirim Karya
                    </a>

                    <a href="{{ route('profil.index') }}"
                        class="block px-4 py-3 rounded-xl font-[Montserrat] transition
                        {{ request()->routeIs('profil.*') ? 'bg-[#ffd13b] font-bold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
                        Profil
                    </a>

                @endif


                {{-- ================= REVIEWER ================= --}}
                @if(in_array(auth()->user()->role, ['reviewer1','reviewer2']))

                    <a href="{{ route('review.index') }}"
                        class="block px-4 py-3 rounded-xl font-[Montserrat] transition
                        {{ request()->routeIs('review.*') ? 'bg-[#ffd13b] font-bold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
                        Penilaian
                    </a>

                @endif

            @endauth

        </nav>


        {{-- Logout --}}
        @auth

        <div class="p-4 border-t">

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit"
                    class="w-full text-left px-4 py-3 rounded-xl text-red-600 hover:bg-red-50 font-[Montserrat]">
                    Logout
                </button>

            </form>

        </div>

        @endauth

    </aside>

    {{-- MAIN --}}
    <main class="md:ml-64 min-h-screen flex flex-col">

        <div class="p-8 flex-1">
            @yield('content')
        </div>

        <footer class="bg-[#6d462a] mt-20 py-6 text-center">

            <h3 class="font-[Poppins] text-2xl font-bold text-white mb-6">
                Kontak Kami
            </h3>

            <div class="flex justify-center gap-8 flex-wrap text-white">

                <a href="https://www.instagram.com/dutabaca_unimal?igsh=MW16bGV3dXBzM3cwOA=="
                    target="_blank"
                    class="hover:text-black">
                    Instagram
                </a>

                <a href="#"
                    class="hover:text-black">
                    Website
                </a>

                <a href="https://wa.me/085191365955"
                    class="hover:text-black">
                    Whatsapp
                </a>

            </div>

            <p class="mt-6 text-white">
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