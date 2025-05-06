<header class="bg-gray-900 border-b border-gray-800 shadow-lg fixed top-0 left-0 right-0 z-50">
    <div class="mx-auto py-1 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="md:flex md:items-center md:gap-12">
                <a href="{{ route('dashboard') }}" class="hover:opacity-90 transition-opacity">
                    <img src="{{ asset('images/logo-z-news.png') }}" alt="Z News Logo" class="w-32 h-32">
                </a>
            </div>

            <div class="hidden md:block transform translate-x-18">
                <nav aria-label="Global">
                    <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <a class="text-gray-100 font-medium transition px-3 py-2 rounded-md hover:bg-gray-800 {{ request()->routeIs('dashboard') ? 'bg-gray-800 text-yellow-500' : 'hover:text-yellow-500' }}"
                                href="{{ route('dashboard', ['username' => $username]) }}">
                                Dashboard
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-100 font-medium transition px-3 py-2 rounded-md hover:bg-gray-800 {{ request()->routeIs('pengelolaan') ? 'bg-gray-800 text-yellow-500' : 'hover:text-yellow-500' }}"
                                href="{{ route('pengelolaan', ['username' => $username]) }}">
                                Pengelolaan
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-100 font-medium transition px-3 py-2 rounded-md hover:bg-gray-800 {{ request()->routeIs('profile') ? 'bg-gray-800 text-yellow-500' : 'hover:text-yellow-500' }}"
                                href="{{ route('profile', ['username' => $username]) }}">
                                Profile
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="flex items-center gap-4">
                @if ($username)
                    <span class="text-yellow-500 font-medium border border-yellow-500 px-3 py-2 rounded-md">Welcome,
                        {{ $username }}!</span>
                @else
                    <span class="text-yellow-500 font-medium border-yellow-500 px-3 py-2 rounded-md">Welcome,
                        Guest</span>
                @endif

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
