<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Cinema App')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    {{-- Header --}}
    <header class="bg-blue-600 text-white p-5 text-center">
        <h1 class="text-2xl font-bold">@yield('header-title', 'My Cinema App')</h1>
        @auth
        <p class="mt-1">Selamat datang, {{ auth()->user()->name }}</p>
        @endauth
    </header>

    {{-- Konten utama --}}
    <main class="flex-grow p-6 flex justify-center items-start">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="text-center text-gray-500 text-sm p-4">
        &copy; {{ date('Y') }} My Cinema App
    </footer>

</body>
</html>
