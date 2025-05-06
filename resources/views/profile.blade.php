@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')
    <div class="bg-gray-900 min-h-screen text-white px-8 py-10">
        <div class="max-w-4xl mx-auto">
            <div class="bg-gray-800 rounded-lg shadow-lg p-8">
                <div class="flex items-center mb-6">
                    <img src="{{ asset('images/profile-logo.jpg') }}" alt="Avatar"
                        class="w-24 h-24 rounded-full border-4 border-yellow-500 mr-6">
                    <div>
                        <h1 class="text-2xl font-bold text-yellow-400">{{ $username ?? 'Nama Pengguna' }}</h1>
                        <p class="text-gray-400">Anggota sejak {{ $createdAt ?? '2025' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h2 class="text-yellow-300 font-semibold text-lg mb-2">Informasi Pribadi</h2>
                        <ul class="text-gray-300 space-y-1">
                            <li><strong>Username:</strong> {{ $username ?? '-' }}</li>
                            <li><strong>Email:</strong> {{ $email ?? 'user@example.com' }}</li>
                            <li><strong>No HP:</strong> {{ $phone ?? '-' }}</li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-yellow-300 font-semibold text-lg mb-2">Aktivitas</h2>
                        <ul class="text-gray-300 space-y-1">
                            <li><strong>Total Berita Dibaca:</strong> {{ $readCount ?? 0 }}</li>
                            <li><strong>Kategori Favorit:</strong> {{ $favoriteCategory ?? 'Belum ada' }}</li>
                            <li><strong>Status Akun:</strong>
                                <span
                                    class="px-2 py-1 bg-green-600 text-xs font-semibold rounded">{{ $status ?? 'Aktif' }}</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-8 text-right">
                    <a href="{{ route('dashboard', ['username' => $username]) }}"
                        class="px-5 py-2 bg-yellow-500 hover:bg-yellow-600 text-black font-semibold rounded-lg transition">Kembali
                        ke Dashboard</a>
                </div>
            </div>
        </div>
    </div>
@endsection
