@extends('layouts.app')

@section('title', 'Pengelolaan Berita')

@section('content')
    <div class="bg-gray-900 min-h-screen text-white px-8 py-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold text-yellow-500 mb-6">Pengelolaan Berita</h1>

            <!-- Count Kategori -->
            <div class="mb-10">
                <h2 class="text-lg font-semibold mb-4">Statistik Berita per Kategori</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach ($jumlahPerKategori as $kategori => $jumlah)
                        @include('components.card-category', [
                            'kategori' => $kategori,
                            'jumlah' => $jumlah,
                        ])
                    @endforeach
                </div>
            </div>

            <!-- Tabel berita -->
            @foreach ($grouped as $kategori => $list)
                @include('components.category-table', ['kategori' => $kategori, 'list' => $list])
            @endforeach
        </div>
    </div>
@endsection
