@extends('layouts.app')

@section('content')
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <p class="text-lg mb-2">{{ $article->published_at->format('d F Y') }} • {{ $article->views }} views</p>
        <h1 class="text-5xl font-bold">{{ $article->title }}</h1>
        @if($article->author)
            <p class="text-lg mt-4">Oleh: {{ $article->author }}</p>
        @endif
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        @if($article->getFirstMediaUrl('featured_image'))
            <img src="{{ $article->getFirstMediaUrl('featured_image') }}" alt="{{ $article->title }}" class="w-full rounded-lg shadow-lg mb-8">
        @endif
        <div class="prose max-w-none text-gray-700 leading-relaxed text-lg">{!! nl2br(e($article->content)) !!}</div>
    </div>
</section>

@if($relatedNews->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8">Berita Lainnya</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedNews as $related)
            <a href="{{ route('news.show', $related->slug) }}" class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale">
                @if($related->getFirstMediaUrl('featured_image'))
                    <img src="{{ $related->getFirstMediaUrl('featured_image') }}" alt="{{ $related->title }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <i class="fas fa-newspaper text-white text-5xl"></i>
                    </div>
                @endif
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-2">{{ $related->published_at->format('d F Y') }}</p>
                    <h3 class="text-xl font-bold">{{ $related->title }}</h3>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
