<header class="bg-gray-900 border-b border-gray-800 shadow-lg fixed top-0 left-0 right-0 z-50">
    <div class="mx-auto py-1 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" class="hover:opacity-90 transition-opacity">
                    <img src="{{ asset('images/logo-z-news.png') }}" alt="Z News Logo" class="w-28 h-28">
                </a>
            </div>

            <div class="md:hidden mr-4">
                <button id="mobile-menu-toggle"
                    class="rounded-sm bg-gray-800 p-2 text-gray-100 transition hover:bg-gray-700 hover:text-yellow-500 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <div class="hidden md:block tranform translate-x-4">
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

            <div class="hidden md:flex items-center gap-4">
                @if ($username)
                    <span class="text-yellow-500 font-medium border border-yellow-500 px-3 py-2 rounded-md">Welcome,
                        {{ $username }}!</span>
                @else
                    <span class="text-yellow-500 font-medium border-yellow-500 px-3 py-2 rounded-md">Welcome,
                        Guest</span>
                @endif
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden hidden mt-2 bg-gray-800 rounded-md p-4">
            <ul class="space-y-2 text-sm">
                <li>
                    <a class="block text-gray-100 font-medium px-3 py-2 rounded-md hover:bg-gray-700 {{ request()->routeIs('dashboard') ? 'bg-gray-700 text-yellow-500' : 'hover:text-yellow-500' }}"
                        href="{{ route('dashboard', ['username' => $username]) }}">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a class="block text-gray-100 font-medium px-3 py-2 rounded-md hover:bg-gray-700 {{ request()->routeIs('pengelolaan') ? 'bg-gray-700 text-yellow-500' : 'hover:text-yellow-500' }}"
                        href="{{ route('pengelolaan', ['username' => $username]) }}">
                        Pengelolaan
                    </a>
                </li>
                <li>
                    <a class="block text-gray-100 font-medium px-3 py-2 rounded-md hover:bg-gray-700 {{ request()->routeIs('profile') ? 'bg-gray-700 text-yellow-500' : 'hover:text-yellow-500' }}"
                        href="{{ route('profile', ['username' => $username]) }}">
                        Profile
                    </a>
                </li>
                <li>
                    <span class="block text-yellow-500 font-medium px-3 py-2 border border-yellow-500 rounded-md mt-2">
                        Welcome, {{ $username ?? 'Guest' }}
                    </span>
                </li>
            </ul>
        </div>
    </div>
</header>
