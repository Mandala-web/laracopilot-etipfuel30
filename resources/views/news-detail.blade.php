@extends('layouts.app')

@section('content')
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="max-w-4xl">
            <p class="text-sm mb-2">{{ $news->published_at->format('d F Y') }} • {{ $news->author ?? 'Admin' }}</p>
            <h1 class="text-5xl font-bold mb-4">{{ $news->title }}</h1>
            <p class="text-xl">{{ $news->excerpt }}</p>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <div class="prose prose-lg max-w-none">
            {!! $news->content !!}
        </div>
        
        <div class="mt-8 pt-8 border-t flex items-center justify-between">
            <div class="flex items-center space-x-4 text-gray-600">
                <span><i class="fas fa-eye"></i> {{ $news->views }} views</span>
                <span><i class="fas fa-user"></i> {{ $news->author ?? 'Admin' }}</span>
            </div>
            <div class="flex space-x-3">
                <a href="#" class="text-blue-600 hover:text-blue-700"><i class="fab fa-facebook text-2xl"></i></a>
                <a href="#" class="text-blue-400 hover:text-blue-500"><i class="fab fa-twitter text-2xl"></i></a>
                <a href="#" class="text-green-600 hover:text-green-700"><i class="fab fa-whatsapp text-2xl"></i></a>
            </div>
        </div>
    </div>
</section>

@if($relatedNews->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8">Berita Terkait</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedNews as $related)
            <a href="{{ route('news.show', $related->slug) }}" class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale">
                <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                    <i class="fas fa-newspaper text-white text-6xl"></i>
                </div>
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-2">{{ $related->published_at->format('d F Y') }}</p>
                    <h3 class="text-xl font-bold mb-2">{{ $related->title }}</h3>
                    <p class="text-gray-600">{{ Str::limit($related->excerpt, 100) }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
