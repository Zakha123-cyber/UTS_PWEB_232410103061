<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getAllBerita()
    {
        return [
            // --- Kategori: News ---
            [
                'judul' => 'Teknologi AI Terkini Mengubah Dunia',
                'isi' => 'AI semakin mendominasi berbagai sektor.',
                'gambar' => 'news-1.jpg',
                'kategori' => 'news'
            ],
            [
                'judul' => 'Startup Indonesia Raup Pendanaan Besar',
                'isi' => 'Beberapa startup menarik investor global.',
                'gambar' => 'news-2.jpeg',
                'kategori' => 'news'
            ],
            [
                'judul' => 'Ekonomi Digital Dorong UMKM Naik Kelas',
                'isi' => 'Transformasi digital bantu bisnis lokal tumbuh.',
                'gambar' => 'news-3.jpeg',
                'kategori' => 'news'
            ],
            [
                'judul' => 'Perkembangan Teknologi Blockchain di Asia',
                'isi' => 'Blockchain dipakai dalam sistem keuangan dan logistik.',
                'gambar' => 'news-4.jpeg',
                'kategori' => 'news'
            ],
            [
                'judul' => 'Pemerintah Rilis Kebijakan Startup 2025',
                'isi' => 'Fokus pada inovasi dan inklusivitas teknologi.',
                'gambar' => 'news-5.jpeg',
                'kategori' => 'news'
            ],

            // --- Kategori: Sport ---
            [
                'judul' => 'Timnas U-23 Lolos ke Final Asia',
                'isi' => 'Pertandingan dramatis antar negara Asia.',
                'gambar' => 'sport-1.jpeg',
                'kategori' => 'sport'
            ],
            [
                'judul' => 'Piala Dunia U-20 Digelar di Indonesia',
                'isi' => 'Persiapan infrastruktur berjalan lancar.',
                'gambar' => 'sport-2.jpeg',
                'kategori' => 'sport'
            ],
            [
                'judul' => 'Atlet Indonesia Raih Emas di Olimpiade',
                'isi' => 'Prestasi luar biasa dalam cabang bulutangkis.',
                'gambar' => 'sport-3.jpeg',
                'kategori' => 'sport'
            ],
            [
                'judul' => 'Liga Champions: Duel Seru di Semifinal',
                'isi' => 'Pertandingan panas antara dua raksasa Eropa.',
                'gambar' => 'sport-4.jpeg',
                'kategori' => 'sport'
            ],
            [
                'judul' => 'Pelatih Baru Timnas Diangkat PSSI',
                'isi' => 'Harapan baru bagi masa depan sepak bola Indonesia.',
                'gambar' => 'sport-5.jpeg',
                'kategori' => 'sport'
            ],

            // --- Kategori: Edukasi ---
            [
                'judul' => 'Belajar Efektif dengan Pomodoro',
                'isi' => 'Teknik Pomodoro untuk fokus belajar.',
                'gambar' => 'edukasi-1.jpeg',
                'kategori' => 'edukasi'
            ],
            [
                'judul' => 'Tips Aman Menggunakan Internet',
                'isi' => 'Waspada terhadap phishing dan malware.',
                'gambar' => 'edukasi-2.jpeg',
                'kategori' => 'edukasi'
            ],
            [
                'judul' => 'Platform MOOC Gratis untuk Mahasiswa',
                'isi' => 'Belajar dari Harvard dan MIT tanpa biaya.',
                'gambar' => 'edukasi-3.jpeg',
                'kategori' => 'edukasi'
            ],
            [
                'judul' => 'Peran Guru di Era Digital',
                'isi' => 'Guru harus adaptif terhadap teknologi pembelajaran.',
                'gambar' => 'edukasi-4.jpeg',
                'kategori' => 'edukasi'
            ],
            [
                'judul' => 'Mengenal Konsep Gamifikasi dalam Edukasi',
                'isi' => 'Belajar lebih seru dengan elemen game.',
                'gambar' => 'edukasi-5.jpeg',
                'kategori' => 'edukasi'
            ],
        ];
    }

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
                'tags' => ['Edukasi']
            ],
            [
                'judul' => 'Laravel 11 rilis!',
                'tanggal' => '2025-05-01',
                'tags' => ['Edukasi']
            ],
            [
                'judul' => 'Barca dibantai Inter, dan gagal menghentikan Remontada!',
                'tanggal' => '2025-04-29',
                'tags' => ['Sport']
            ],
            [
                'judul' => 'Perbandingan React vs Vue vs Angular',
                'tanggal' => '2025-04-25',
                'tags' => ['Edukasi']
            ],
            [
                'judul' => 'Peluang Karir sebagai Data Scientist di 2025',
                'tanggal' => '2025-04-22',
                'tags' => ['News']
            ],
            [
                'judul' => 'Mengapa DevOps Penting dalam Tim Modern?',
                'tanggal' => '2025-04-20',
                'tags' => ['News']
            ],
            [
                'judul' => 'AI dan Etika: Batasan yang Perlu Dijaga',
                'tanggal' => '2025-04-18',
                'tags' => ['News']
            ],
            [
                'judul' => '10 Tools Wajib untuk Web Developer',
                'tanggal' => '2025-04-15',
                'tags' => ['Edukasi']
            ],
        ];

        return view('dashboard', compact('username', 'berita', 'trending'));
    }

    private function handleBreadcrumb($kategori = null)
    {
        $semuaBerita = $this->getAllBerita();

        if (!$kategori) {
            return $semuaBerita;
        }

        return array_filter($semuaBerita, function ($item) use ($kategori) {
            return strtolower($item['kategori']) === strtolower($kategori);
        });
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');

        $semuaBerita = $this->getAllBerita();

        $grouped = collect($semuaBerita)->groupBy('kategori');

        $jumlahPerKategori = $grouped->map(fn($item) => count($item));

        return view('pengelolaan', compact('username', 'grouped', 'jumlahPerKategori'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }
}
