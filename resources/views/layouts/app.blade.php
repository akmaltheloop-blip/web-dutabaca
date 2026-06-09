<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css','resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <title>Duta Baca</title>
</head>


<body class="bg-[#fcf9f8] text-gray-800 font-[Inter]">

    {{-- Sidebar --}}
    <aside class="fixed left-0 top-0 h-screen w-64 bg-white border-r border-[#eee] hidden md:flex flex-col shadow-sm">

        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold text-[#5b3b1c]">
                Duta Baca
            </h1>

            <p class="text-sm text-gray-500 uppercase mt-1">
                Universitas Malikussaleh
            </p>
        </div>

        <nav class="flex-1 p-4 space-y-2">

            {{-- Dashboard --}}
           <a href="{{ route('dashboard') }}"
             class="block px-4 py-3 rounded-xl transition
             {{ request()->routeIs('dashboard') ? 'bg-[#f7f1e8] font-semibold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
              Dashboard
            </a>

            {{-- Publikasi --}}
            <a href="{{ route('publikasi.index') }}"
             class="block px-4 py-3 rounded-xl transition
             {{ request()->routeIs('publikasi.*') ? 'bg-[#f7f1e8] font-semibold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
           Publikasi
            </a>


            {{-- Kirim Karya --}}
            <a href="{{ route('kirim-karya.index') }}"
             class="block px-4 py-3 rounded-xl transition
             {{ request()->routeIs('kirim-karya.*') ? 'bg-[#f7f1e8] font-semibold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
              Kirim Karya
            </a>

            {{-- Review --}}
            <a href="{{ route('review.index') }}"
               class="block px-4 py-3 rounded-xl hover:bg-[#f7f1e8] transition">
                Penilaian
            </a>

            {{-- Profil --}}
            <a href="{{ route('profil.index') }}"
            class="block px-4 py-3 rounded-xl transition
              {{ request()->routeIs('profil.*') ? 'bg-[#f7f1e8] font-semibold text-[#5b3b1c]' : 'hover:bg-[#f7f1e8]' }}">
             Profil
            </a>
        </nav>

    </aside>

    {{-- Main --}}
    <main class="md:ml-64 min-h-screen">

        <header class="bg-white border-b border-[#eee] px-8 py-5">
            <h2 class="text-2xl font-semibold text-[#5b3b1c]">
                @yield('title')
            </h2>
        </header>

        <div class="p-8">
            @yield('content')
        </div>

    </main>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

</body>
</html>