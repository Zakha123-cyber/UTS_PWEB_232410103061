<div class="mb-10">
    <h2 class="text-xl text-yellow-400 font-bold mb-3 capitalize">Kategori: {{ $kategori }}</h2>
    <div class="overflow-x-auto bg-gray-800 rounded-lg shadow">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-700 text-yellow-500">
                <tr>
                    <th class="p-3">Judul</th>
                    <th class="p-3">Isi</th>
                    <th class="p-3">Gambar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $berita)
                    <tr class="border-t border-gray-600 hover:bg-gray-700">
                        <td class="p-3">{{ $berita['judul'] }}</td>
                        <td class="p-3">{{ $berita['isi'] }}</td>
                        <td class="p-3">
                            <img src="{{ asset('images/' . $berita['gambar']) }}" class="w-24 rounded">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
