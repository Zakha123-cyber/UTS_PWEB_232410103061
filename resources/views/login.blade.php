<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Z-News</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md px-6">
        <!-- Logo -->
        <div class="flex justify-center">
            <img src="{{ asset('images/logo-z-news.png') }}" alt="Logo" class="h-44 w-44">
        </div>

        <!-- Card -->
        <div class="bg-white/10 backdrop-blur-md rounded-lg shadow-lg p-6">
            <h2 class="text-yellow-500 text-2xl font-bold mb-4 text-center">Login ke Portal Berita</h2>
            <form action="{{ route('login.submit') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-yellow-500 text-sm font-medium mb-1">Username</label>
                    <input type="email" name="username" id="email"
                        class="w-full px-4 py-2 rounded bg-gray-800 text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                        required>
                </div>

                <div>
                    <label for="password" class="block text-yellow-500 text-sm font-medium mb-1">Password</label>
                    <input type="password" name="password" id="password"
                        class="w-full px-4 py-2 rounded bg-gray-800 text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                        required>
                </div>

                <button type="submit"
                    class="w-full bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-semibold py-2 px-4 rounded transition duration-300">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>

</html>
