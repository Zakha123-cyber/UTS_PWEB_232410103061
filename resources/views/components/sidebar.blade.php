<!-- Sidebar Overlay (Mobile only) -->
<div x-data="{ open: false }" class="md:flex">

    <!-- Toggle Button (Only on Mobile) -->
    <button @click="open = !open" class="m-4 md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- Sidebar -->
    <div :class="{ 'translate-x-0': open, '-translate-x-full': !open }"
        class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-gray-100 transform transition-transform duration-300 ease-in-out md:relative md:translate-x-0 md:block">

        <!-- Close Button (Mobile) -->
        <div class="flex items-center justify-between p-4 md:hidden">
            <span class="text-lg font-bold">Menu</span>
            <button @click="open = false" class="text-gray-600 hover:text-gray-800">
                ✕
            </button>
        </div>

        <!-- Sidebar Content -->
        <div class="px-4 py-6 space-y-4">
            <span class="grid h-10 w-32 place-content-center rounded-lg bg-gray-100 text-xs text-gray-600">
                Logo
            </span>

            <ul class="space-y-1">
                <li>
                    <a href="#" class="block rounded-lg bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700">
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                        Profile
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                        Pengelolaan
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
