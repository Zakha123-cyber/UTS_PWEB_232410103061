<article class="overflow-hidden rounded-lg shadow-sm transition hover:shadow-lg">
    <img alt="{{ $judul }}" src="{{ asset('images/' . $gambar) }}" class="h-56 w-full object-cover" />
    <div class="bg-white p-4 sm:p-6">
        <time datetime="2022-10-10" class="block text-xs text-gray-500"> 10th Oct 2022 </time>

        <a href="#">
            <h3 class="mt-0.5 text-lg text-gray-900">{{ $judul }}</h3>
        </a>

        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
            {{ $isi }}
        </p>
    </div>
</article>
