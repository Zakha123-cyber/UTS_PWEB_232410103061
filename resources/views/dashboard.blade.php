@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="bg-gray-900 min-h-screen text-gray-100">
        <!-- Breadcrumb Section -->
        <div class="bg-gray-800 py-4">
            <div class="container mx-auto px-4">
                <nav aria-label="Breadcrumb">
                    <ol class="flex justify-center items-center gap-2 text-sm">
                        <li>
                            <a href="#" class="block transition-colors hover:text-yellow-500 font-medium">News</a>
                        </li>

                        <li class="text-yellow-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                            </svg>
                        </li>

                        <li>
                            <a href="#" class="block transition-colors hover:text-yellow-500 font-medium">Sport</a>
                        </li>

                        <li class="text-yellow-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                            </svg>
                        </li>

                        <li>
                            <a href="#"
                                class="block transition-colors hover:text-yellow-500 font-medium text-yellow-500">Edukasi</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                {{-- Main News Section (¾ width) --}}
                <div class="lg:col-span-3 space-y-6">
                    <h1 class="text-2xl font-bold text-yellow-500 mb-6 border-b border-gray-700 pb-2">Latest News</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                        @foreach ($berita as $item)
                            <x-card :judul="$item['judul']" :gambar="$item['gambar']" :isi="$item['isi']"
                                class="bg-gray-800 hover:bg-gray-700 transition-all duration-300 border border-gray-700 hover:border-yellow-500/30 hover:shadow-lg hover:shadow-yellow-500/10" />
                        @endforeach
                    </div>
                </div>

                {{-- Trending Section (¼ width) --}}
                <div class="lg:col-span-1 space-y-6">
                    <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                        <h2 class="text-xl font-bold text-yellow-500 mb-4 pb-2 border-b border-gray-700">Trending Now</h2>
                        <div class="space-y-4">
                            @foreach ($trending as $trend)
                                <x-blog-card :judul="$trend['judul']" :tanggal="$trend['tanggal']" :tags="$trend['tags']"
                                    class="bg-gray-700 hover:bg-gray-600 transition-colors duration-200 p-3 rounded-lg" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
