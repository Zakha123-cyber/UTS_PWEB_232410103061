@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="bg-gray-900 min-h-screen text-gray-100 pt-10"> <!-- Added pt-20 for fixed navbar -->
        <!-- Breadcrumb Section -->
        <div class="bg-gray-800/80 backdrop-blur-sm sticky top-18 z-40 border-b border-gray-700/50">
            <div class="container mx-auto px-4">
                <nav aria-label="Breadcrumb">
                    <ol class="flex justify-center items-center gap-2 text-sm">
                        <li>
                            <a href="{{ route('dashboard', ['kategori' => 'news', 'username' => $username]) }}"
                                class="block transition-all font-medium px-3 py-2 rounded-md
                                {{ request()->input('kategori') === 'news'
                                    ? 'bg-gray-700/50 text-yellow-500'
                                    : 'text-gray-300 hover:text-yellow-500 hover:bg-gray-700/30' }}">
                                News
                            </a>
                        </li>

                        <li class="text-yellow-500/60">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                            </svg>
                        </li>

                        <li>
                            <a href="{{ route('dashboard', ['kategori' => 'sport', 'username' => $username]) }}"
                                class="block transition-all font-medium px-3 py-2 rounded-md
                                {{ request()->input('kategori') === 'sport'
                                    ? 'bg-gray-700/50 text-yellow-500 shadow-inner shadow-yellow-500/20'
                                    : 'text-gray-300 hover:text-yellow-500 hover:bg-gray-700/30' }}">
                                Sport
                            </a>
                        </li>

                        <li class="text-yellow-500/60">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                            </svg>
                        </li>

                        <li>
                            <a href="{{ route('dashboard', ['kategori' => 'edukasi', 'username' => $username]) }}"
                                class="block transition-all font-medium px-3 py-2 rounded-md
                                {{ request()->input('kategori') === 'edukasi'
                                    ? 'bg-gray-700/50 text-yellow-500 shadow-inner shadow-yellow-500/20'
                                    : 'text-gray-300 hover:text-yellow-500 hover:bg-gray-700/30' }}">
                                Education
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div class="lg:col-span-3 space-y-6">
                    <div class="flex justify-between items-center mb-6 border-b border-gray-700 pb-4">
                        <h1 class="text-2xl font-bold text-yellow-500">Latest News</h1>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-400">Sort by:</span>
                            <select
                                class="bg-gray-800 border border-gray-700 text-gray-300 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 px-3 py-1">
                                <option selected>Latest</option>
                                <option>Popular</option>
                                <option>Trending</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                        @foreach ($berita as $item)
                            <x-card :judul="$item['judul']" :gambar="$item['gambar']" :isi="$item['isi']"
                                class="bg-gray-800 hover:bg-gray-700/80 transition-all duration-300 border border-gray-700 hover:border-yellow-500/50 hover:shadow-lg hover:shadow-yellow-500/10 transform hover:-translate-y-1" />
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center mt-8">
                        <nav class="inline-flex rounded-md shadow-sm">
                            <a href="#"
                                class="px-3 py-2 rounded-l-md bg-gray-800 text-gray-300 hover:bg-gray-700 border border-gray-700">
                                &laquo; Previous
                            </a>
                            <a href="#"
                                class="px-3 py-2 bg-gray-800 text-yellow-500 border-t border-b border-gray-700">
                                1
                            </a>
                            <a href="#"
                                class="px-3 py-2 bg-gray-800 text-gray-300 hover:bg-gray-700 border-t border-b border-gray-700">
                                2
                            </a>
                            <a href="#"
                                class="px-3 py-2 bg-gray-800 text-gray-300 hover:bg-gray-700 border-t border-b border-gray-700">
                                3
                            </a>
                            <a href="#"
                                class="px-3 py-2 rounded-r-md bg-gray-800 text-gray-300 hover:bg-gray-700 border border-gray-700">
                                Next &raquo;
                            </a>
                        </nav>
                    </div>
                </div>

                <!-- Sidebar Section -->
                <div class="lg:col-span-1 space-y-6">
                    <!-- Trending Now Section -->
                    <div class="bg-gray-800 p-5 rounded-lg border border-gray-700 shadow-lg">
                        <div class="flex items-center justify-between mb-4 pb-3 border-b border-gray-700">
                            <h2 class="text-xl font-bold text-yellow-500">Trending Now</h2>
                            <span class="text-xs text-gray-400 bg-gray-700 px-2 py-1 rounded-full">Updated daily</span>
                        </div>
                        <div class="space-y-4">
                            @foreach ($trending as $trend)
                                <x-blog-card :judul="$trend['judul']" :tanggal="$trend['tanggal']" :tags="$trend['tags']"
                                    class="bg-gray-700/50 hover:bg-gray-700 transition-colors duration-200 p-4 rounded-lg border border-gray-600/50 hover:border-yellow-500/30" />
                            @endforeach
                        </div>
                    </div>
                    {{-- Popular Tags Section --}}
                    @include('components.popular-tags-card')
                </div>
            </div>
        </div>
    </div>
@endsection
