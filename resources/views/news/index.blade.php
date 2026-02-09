@extends('layouts.app')

@section('content')
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold">Berita Terkini</h1>
        <p class="text-xl mt-4">Informasi dan kegiatan terbaru Nasdem Sidoarjo</p>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($news as $article)
            <a href="{{ route('news.show', $article->slug) }}" class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale">
                @if($article->getFirstMediaUrl('featured_image'))
                    <img src="{{ $article->getFirstMediaUrl('featured_image') }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <i class="fas fa-newspaper text-white text-6xl"></i>
                    </div>
                @endif
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-2">{{ $article->published_at->format('d F Y') }} • {{ $article->views }} views</p>
                    <h3 class="text-xl font-bold mb-2">{{ $article->title }}</h3>
                    <p class="text-gray-600">{{ Str::limit($article->excerpt, 120) }}</p>
                </div>
            </a>
            @endforeach
        </div>
        <div class="mt-8">{{ $news->links() }}</div>
    </div>
</section>
@endsection
