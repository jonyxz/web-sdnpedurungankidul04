<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Berita Terbaru</h1>
    <div class="space-y-6">
        @foreach($posts as $post)
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                <p class="mt-2 text-gray-600">{{ Str::limit($post->content, 200) }}</p>
                <a href="{{ route('news.detail', $post->id) }}" class="mt-4 inline-block text-blue-500 hover:underline">Baca Selengkapnya</a>
            </div>
        @endforeach
    </div>
</div>