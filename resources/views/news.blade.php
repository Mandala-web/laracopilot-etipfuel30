@extends('layouts.app')

@section('content')
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold">Berita Terbaru</h1>
        <p class="text-xl mt-4">Informasi dan kabar terkini dari Nasdem Sidoarjo</p>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        @if($news->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($news as $item)
                <a href="{{ route('news.show', $item->slug) }}" class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale">
                    <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <i class="fas fa-newspaper text-white text-6xl"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-500 mb-2">{{ $item->published_at->format('d F Y') }} • {{ $item->views }} views</p>
                        <h3 class="text-xl font-bold mb-2">{{ $item->title }}</h3>
                        <p class="text-gray-600">{{ Str::limit($item->excerpt ?? strip_tags($item->content), 100) }}</p>
                        <div class="mt-4 text-blue-600 font-semibold">Baca Selengkapnya →</div>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="mt-8">{{ $news->links() }}</div>
        @else
            <div class="text-center py-12">
                <i class="fas fa-newspaper text-gray-400 text-6xl mb-4"></i>
                <p class="text-gray-600 text-lg">Belum ada berita yang dipublikasikan.</p>
            </div>
        @endif
    </div>
</section>
@endsection
