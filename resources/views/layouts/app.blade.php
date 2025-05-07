<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-100 text-gray-900">

    {{-- Navbar di atas --}}
    <x-navbar :username="$username ?? null" />

    <div class="md:flex min-h-screen pt-17">
        {{-- Main content --}}
        <main class="flex-1">
            @yield('content')
        </main>
    </div>

    {{-- Footer di bawah --}}
    <x-footer />

    @vite('resources/js/app.js')
</body>

</html>
