<x-app-layout>
    <div class="flex min-h-screen bg-gray-100 -m-6">

        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg">
            <div class="p-6 border-b">
                <h1 class="text-2xl font-bold text-blue-600">📚 Duta Baca</h1>
            </div>

            <nav class="p-4 space-y-2">
                <a href="#" class="block px-4 py-3 rounded-lg bg-blue-100 text-blue-600 font-semibold">
                    Dashboard
                </a>

                <a href="#" class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                    Publikasi
                </a>

                <a href="#" class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                    Kirim Karya
                </a>

                <a href="#" class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                    Review
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">

            <!-- Header -->
            <div class="bg-white rounded-2xl shadow p-8 mb-8">
                <h2 class="text-4xl font-bold text-blue-600 mb-2">
                    Selamat Datang Sobat Duta Baca!
                </h2>
                <p class="text-gray-600 text-lg">
                    Halo, {{ Auth::user()->name }} 👋
                </p>
            </div>

            <!-- Statistik -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-blue-500 text-white p-6 rounded-2xl shadow">
                    <h3 class="text-lg font-semibold">Publikasi</h3>
                    <p class="text-4xl font-bold mt-2">12</p>
                </div>

                <div class="bg-green-500 text-white p-6 rounded-2xl shadow">
                    <h3 class="text-lg font-semibold">Karya Terkirim</h3>
                    <p class="text-4xl font-bold mt-2">8</p>
                </div>

                <div class="bg-purple-500 text-white p-6 rounded-2xl shadow">
                    <h3 class="text-lg font-semibold">Review</h3>
                    <p class="text-4xl font-bold mt-2">5</p>
                </div>
            </div>

        </main>
    </div>
</x-app-layout>