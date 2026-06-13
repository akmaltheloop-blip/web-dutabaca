<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duta Baca Unimal</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F7F3EC]">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-72 bg-white border-r border-[#E8DDC8] shadow-sm flex flex-col">

        <!-- Logo -->
        <div class="p-6 border-b border-[#E8DDC8]">

            <div class="flex items-center gap-4">

                <img src="{{ asset('images/logo-dutabaca.png') }}"
                     alt="Logo Duta Baca"
                     class="w-16 h-16 object-contain">

                <div>
                    <h1 class="text-2xl font-bold text-[#5B371E] leading-tight">
                        Duta Baca
                    </h1>

                    <p class="text-sm font-semibold tracking-widest text-[#14532D]">
                        UNIMAL
                    </p>
                </div>

            </div>
        </div>

        <!-- Menu -->
        <nav class="p-4 space-y-2 flex-1">

            <a href="{{ route('dashboard') }}"
               class="flex items-center gap-3 px-5 py-3 rounded-xl
                      text-[#5B371E] font-medium
                      hover:bg-[#FFF6E5] transition">

                Dashboard
            </a>

            <div class="px-2">

    <button
        onclick="document.getElementById('publikasiMenu').classList.toggle('hidden')"
        class="w-full flex justify-between items-center
               px-5 py-3 rounded-xl
               text-[#5B371E] font-medium
               hover:bg-[#FFF6E5]">

        <span>Publikasi</span>
        <span>▼</span>
    </button>

    <div id="publikasiMenu" class="hidden mt-2 ml-4 space-y-2">

        <a href="{{ route('publikasi.buku') }}"
           class="block px-4 py-2 rounded-lg text-sm hover:bg-[#FFF6E5]">
            Buku
        </a>

        <a href="{{ route('publikasi.artikel') }}"
           class="block px-4 py-2 rounded-lg text-sm hover:bg-[#FFF6E5]">
            Artikel
        </a>

        <a href="{{ route('publikasi.majalah') }}"
           class="block px-4 py-2 rounded-lg text-sm hover:bg-[#FFF6E5]">
            Majalah
        </a>

    </div>
</div>

            <a href="{{ route('kirim-karya.index') }}"
               class="flex items-center gap-3 px-5 py-3 rounded-xl
                      text-[#5B371E] font-medium
                      hover:bg-[#FFF6E5] transition">

                Kirim Karya
            </a>

            <a href="{{ route('review.index') }}"
               class="flex items-center gap-3 px-5 py-3 rounded-xl
                      text-[#5B371E] font-medium
                      hover:bg-[#FFF6E5] transition">

                Review
            </a>

        </nav>

        <!-- Footer -->
        <div class="p-5 border-t border-[#E8DDC8]">

            <div class="bg-[#F9F5EE] rounded-xl p-4 text-center">

                <p class="text-sm text-gray-500">
                    © {{ date('Y') }}
                </p>

                <p class="text-sm font-medium text-[#5B371E]">
                    Duta Baca Universitas Malikussaleh
                </p>

            </div>
        </div>

    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8 md:p-10">

        @yield('content')

    </main>

</div>

</body>
</html>