<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css','resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <title>Duta Baca</title>
</head>

<body class="bg-[#fcf9f8] text-gray-800 font-[Inter]">

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

            <a href="{{ route('dashboard') }}"
               class="block px-4 py-3 rounded-xl bg-[#f7f1e8] hover:bg-[#efe3d4] transition">
                Dashboard
            </a>

            <a href="{{ route('publikasi.index') }}"
               class="block px-4 py-3 rounded-xl hover:bg-[#f7f1e8] transition">
                Publikasi
            </a>

            <a href="{{ route('kirim-karya.index') }}"
               class="block px-4 py-3 rounded-xl hover:bg-[#eef4e8] transition">
                Kirim Karya
            </a>

            <a href="{{ route('review.index') }}"
               class="block px-4 py-3 rounded-xl hover:bg-[#f7f1e8] transition">
                Review
            </a>

        </nav>

    </aside>

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

</body>
</html>