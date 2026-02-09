@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="gradient-bg text-white py-20">
    <div class="max-w-7xl mx-auto px-4 text-center fade-in">
        @if($sections->count() > 0)
            <h1 class="text-5xl font-bold mb-4">{{ $sections->first()->title ?? 'Selamat Datang' }}</h1>
            <p class="text-xl mb-8">{{ $sections->first()->subtitle ?? '' }}</p>
        @else
            <h1 class="text-5xl font-bold mb-4">Selamat Datang</h1>
            <p class="text-xl mb-8">Website Partai Nasdem Sidoarjo</p>
        @endif
        <div class="flex justify-center space-x-4">
            <a href="{{ route('programs') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">Lihat Program</a>
            <a href="{{ route('member.check') }}" class="border-2 border-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">Cek Status Anggota</a>
        </div>
    </div>
</section>

<!-- Dynamic Sections -->
@if($sections->count() > 1)
    @foreach($sections->skip(1) as $section)
    <section class="py-16 {{ $loop->even ? 'bg-white' : 'bg-gray-50' }}">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                @if($section->icon)
                    <i class="fas fa-flag text-5xl text-blue-600 mb-4"></i>
                @endif
                <h2 class="text-4xl font-bold mb-4">{{ $section->title }}</h2>
                <p class="text-xl text-gray-600">{{ $section->subtitle }}</p>
            </div>
            <div class="text-gray-700 leading-relaxed">{!! nl2br(e($section->content)) !!}</div>
        </div>
    </section>
    @endforeach
@endif

<!-- Latest News -->
@if($latestNews->count() > 0)
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12">Berita Terbaru</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($latestNews as $news)
            <a href="{{ route('news.show', $news->slug) }}" class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale">
                <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                    <i class="fas fa-newspaper text-white text-6xl"></i>
                </div>
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-2">{{ $news->published_at->format('d F Y') }}</p>
                    <h3 class="text-xl font-bold mb-2">{{ $news->title }}</h3>
                    <p class="text-gray-600">{{ Str::limit($news->excerpt, 100) }}</p>
                </div>
            </a>
            @endforeach
        </div>
        <div class="text-center mt-8">
            <a href="{{ route('news') }}" class="gradient-bg text-white px-8 py-3 rounded-lg inline-block hover:opacity-90 transition">Lihat Semua Berita</a>
        </div>
    </div>
</section>
@endif

<!-- Gallery Preview -->
@if($galleries->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12">Galeri Kegiatan</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($galleries as $gallery)
                <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-purple-500 rounded-lg shadow flex items-center justify-center">
                    <i class="fas fa-image text-white text-4xl"></i>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-8">
            <a href="{{ route('gallery') }}" class="gradient-bg text-white px-8 py-3 rounded-lg inline-block hover:opacity-90 transition">Lihat Semua Galeri</a>
        </div>
    </div>
</section>
@endif
@endsection
