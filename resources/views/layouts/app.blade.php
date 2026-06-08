<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-[#F8F4EC]">

    <nav class="bg-[#5b3b1c] text-white p-5">
        <h1 class="text-2xl font-bold">
            Duta Baca
        </h1>
    </nav>

    <main class="container mx-auto p-8">
        @yield('content')
    </main>

</body>
</html>