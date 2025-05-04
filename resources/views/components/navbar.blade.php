<header class="bg-gray-900 border-b border-gray-800 shadow-lg">
    <div class="mx-auto max-w-screen-xl py-1 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="md:flex md:items-center md:gap-12">
                <a href="{{ route('dashboard') }}" class="hover:opacity-90 transition-opacity">
                    <img src="{{ asset('images/logo-z-news.png') }}" alt="Z News Logo" class="w-32 h-32">
                </a>
            </div>

            <div class="hidden md:block">
                <nav aria-label="Global">
                    <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <a class="text-gray-100 font-medium transition hover:text-yellow-500 px-3 py-2 rounded-md hover:bg-gray-800"
                                href="#">
                                Dashboard
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-100 font-medium transition hover:text-yellow-500 px-3 py-2 rounded-md hover:bg-gray-800"
                                href="#">
                                Pengelolaan
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-100 font-medium transition hover:text-yellow-500 px-3 py-2 rounded-md hover:bg-gray-800"
                                href="#">
                                Profile
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="flex items-center gap-4">
                <div class="sm:flex sm:gap-4">
                    <a class="rounded-md bg-yellow-500 px-5 py-2.5 text-sm font-medium text-gray-900 shadow-sm hover:bg-yellow-600 transition-colors"
                        href="#">
                        Login
                    </a>

                    <div class="hidden sm:flex">
                        <a class="rounded-md border border-yellow-500 px-5 py-2.5 text-sm font-medium text-yellow-500 hover:bg-yellow-500/10 transition-colors"
                            href="#">
                            Register
                        </a>
                    </div>
                </div>

                <div class="block md:hidden">
                    <button
                        class="rounded-sm bg-gray-800 p-2 text-gray-100 transition hover:bg-gray-700 hover:text-yellow-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
