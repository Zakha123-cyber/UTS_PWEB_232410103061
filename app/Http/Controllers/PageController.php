<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function submitLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        return redirect()->route('dashboard', ['username' => $request->username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        $berita = [
            [
                'judul' => 'Teknologi AI Terkini Mengubah Dunia',
                'isi' => 'AI semakin mendominasi berbagai sektor, mulai dari kesehatan hingga transportasi.',
                'gambar' => 'ai.jpg'
            ],
            [
                'judul' => 'Startup Indonesia Raup Pendanaan Besar',
                'isi' => 'Beberapa startup berhasil menarik perhatian investor global.',
                'gambar' => 'startup.jpg'
            ],
            [
                'judul' => 'Tips Aman Menggunakan Internet',
                'isi' => 'Pakar menyarankan agar pengguna waspada terhadap phishing dan malware.',
                'gambar' => 'internet.jpg'
            ]
        ];

        $trending = [
            [
                'judul' => 'Cara mudah belajar Vue.js',
                'tanggal' => '2025-05-03',
                'tags' => ['Vue', 'JavaScript']
            ],
            [
                'judul' => 'Laravel 11 rilis!',
                'tanggal' => '2025-05-01',
                'tags' => ['Laravel', 'PHP']
            ],
        ];

        return view('dashboard', compact('username', 'berita', 'trending'));
    }


    public function pengelolaan()
    {
        return view('pengelolaan');
    }

    public function profile()
    {
        return view('profile');
    }
}
