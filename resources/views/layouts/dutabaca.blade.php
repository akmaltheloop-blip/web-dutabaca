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
    <aside class="w-72 bg-white shadow-lg flex flex-col">
        <!-- Logo -->
        <div class="p-6 border-b border-[#E8DDC8]">
            <div class="flex items-center gap-4">
                <img src="{{ asset('images/logo-dutabaca.png') }}"
                     alt="Logo Duta Baca"
                     class="w-20 h-20 object-contain">

                <div>
                    <h1 class="text-3xl font-bold text-[#5B371E] leading-tight">
                        Duta Baca
                    </h1>
                    <p class="text-sm font-semibold tracking-widest text-[#4E8B4A]">
                        UNIMAL
                    </p>
                </div>
            </div>
        </div>

        <!-- Menu -->
        <nav class="p-4 space-y-3 flex-1">
            <a href="{{ route('dashboard') }}"
               class="block px-5 py-3 rounded-xl hover:bg-[#FFF6E5] text-[#5B371E] font-medium">
                 Dashboard
            </a>

            <a href="{{ route('publikasi.index') }}"
               class="block px-5 py-3 rounded-xl hover:bg-[#FFF6E5] text-[#5B371E] font-medium">
                 Publikasi
            </a>

            <a href="{{ route('kirim-karya.index') }}"
               class="block px-5 py-3 rounded-xl hover:bg-[#FFF6E5] text-[#5B371E] font-medium">
                 Kirim Karya
            </a>

            <a href="{{ route('review.index') }}"
               class="block px-5 py-3 rounded-xl hover:bg-[#FFF6E5] text-[#5B371E] font-medium">
                 Review
            </a>
        </nav>

        <!-- Footer -->
        <div class="p-4 text-center text-sm text-gray-500 border-t border-[#E8DDC8]">
            © {{ date('Y') }} Duta Baca Unimal
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10">
        @yield('content')
    </main>
</div>

</body>
</html>