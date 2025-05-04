@props(['judul', 'tanggal', 'tags'])

<article class="rounded-[10px] border border-gray-200 bg-white px-4 pt-12 pb-4">
    <time datetime="{{ $tanggal }}" class="block text-xs text-gray-500">
        {{ \Carbon\Carbon::parse($tanggal)->format('d M Y') }} </time>

    <a href="#">
        <h3 class="mt-0.5 text-lg font-medium text-gray-900">
            {{ $judul }}
        </h3>
    </a>

    <div class="mt-4 flex flex-wrap gap-1">
        @foreach ($tags as $tag)
            <span class="rounded-full bg-purple-100 px-2.5 py-0.5 text-xs whitespace-nowrap text-purple-600">
                {{ $tag }}
            </span>
        @endforeach
    </div>
</article>
