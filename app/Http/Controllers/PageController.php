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
        $kategori = $request->query('kategori');

        $berita = $this->handleBreadcrumb($kategori);

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

    // Fungsi filter kategori
    private function handleBreadcrumb($kategori = null)
    {
        $semuaBerita = [
            // --- Kategori: News ---
            [
                'judul' => 'Teknologi AI Terkini Mengubah Dunia',
                'isi' => 'AI semakin mendominasi berbagai sektor.',
                'gambar' => 'ai.jpg',
                'kategori' => 'news'
            ],
            [
                'judul' => 'Startup Indonesia Raup Pendanaan Besar',
                'isi' => 'Beberapa startup menarik investor global.',
                'gambar' => 'startup.jpg',
                'kategori' => 'news'
            ],
            [
                'judul' => 'Ekonomi Digital Dorong UMKM Naik Kelas',
                'isi' => 'Transformasi digital bantu bisnis lokal tumbuh.',
                'gambar' => 'umkm.jpg',
                'kategori' => 'news'
            ],
            [
                'judul' => 'Perkembangan Teknologi Blockchain di Asia',
                'isi' => 'Blockchain dipakai dalam sistem keuangan dan logistik.',
                'gambar' => 'blockchain.jpg',
                'kategori' => 'news'
            ],
            [
                'judul' => 'Pemerintah Rilis Kebijakan Startup 2025',
                'isi' => 'Fokus pada inovasi dan inklusivitas teknologi.',
                'gambar' => 'kebijakan.jpg',
                'kategori' => 'news'
            ],

            // --- Kategori: Sport ---
            [
                'judul' => 'Timnas U-23 Lolos ke Final Asia',
                'isi' => 'Pertandingan dramatis antar negara Asia.',
                'gambar' => 'bola.jpg',
                'kategori' => 'sport'
            ],
            [
                'judul' => 'Piala Dunia U-20 Digelar di Indonesia',
                'isi' => 'Persiapan infrastruktur berjalan lancar.',
                'gambar' => 'piala-dunia.jpg',
                'kategori' => 'sport'
            ],
            [
                'judul' => 'Atlet Indonesia Raih Emas di Olimpiade',
                'isi' => 'Prestasi luar biasa dalam cabang bulutangkis.',
                'gambar' => 'olimpiade.jpg',
                'kategori' => 'sport'
            ],
            [
                'judul' => 'Liga Champions: Duel Seru di Semifinal',
                'isi' => 'Pertandingan panas antara dua raksasa Eropa.',
                'gambar' => 'ucl.jpg',
                'kategori' => 'sport'
            ],
            [
                'judul' => 'Pelatih Baru Timnas Diangkat PSSI',
                'isi' => 'Harapan baru bagi masa depan sepak bola Indonesia.',
                'gambar' => 'pelatih.jpg',
                'kategori' => 'sport'
            ],

            // --- Kategori: Edukasi ---
            [
                'judul' => 'Belajar Efektif dengan Pomodoro',
                'isi' => 'Teknik Pomodoro untuk fokus belajar.',
                'gambar' => 'pomodoro.jpg',
                'kategori' => 'edukasi'
            ],
            [
                'judul' => 'Tips Aman Menggunakan Internet',
                'isi' => 'Waspada terhadap phishing dan malware.',
                'gambar' => 'internet.jpg',
                'kategori' => 'edukasi'
            ],
            [
                'judul' => 'Platform MOOC Gratis untuk Mahasiswa',
                'isi' => 'Belajar dari Harvard dan MIT tanpa biaya.',
                'gambar' => 'mooc.jpg',
                'kategori' => 'edukasi'
            ],
            [
                'judul' => 'Peran Guru di Era Digital',
                'isi' => 'Guru harus adaptif terhadap teknologi pembelajaran.',
                'gambar' => 'guru.jpg',
                'kategori' => 'edukasi'
            ],
            [
                'judul' => 'Mengenal Konsep Gamifikasi dalam Edukasi',
                'isi' => 'Belajar lebih seru dengan elemen game.',
                'gambar' => 'gamifikasi.jpg',
                'kategori' => 'edukasi'
            ]
        ];

        // Jika tidak ada kategori, tampilkan semua
        if (!$kategori) {
            return $semuaBerita;
        }

        // Jika ada kategori, filter berdasarkan itu
        return array_filter($semuaBerita, function ($item) use ($kategori) {
            return strtolower($item['kategori']) === strtolower($kategori);
        });
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
