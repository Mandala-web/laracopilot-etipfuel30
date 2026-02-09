@extends('layouts.app')

@section('content')
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold">Tentang Kami</h1>
    </div>
</section>

@if($sections->count() > 0)
    @foreach($sections as $section)
    <section class="py-16 {{ $loop->even ? 'bg-white' : 'bg-gray-50' }}">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-8">
                @if($section->icon)
                    <i class="fas fa-eye text-6xl text-blue-600 mb-4"></i>
                @endif
                <h2 class="text-4xl font-bold mb-4">{{ $section->title }}</h2>
                <p class="text-xl text-gray-600">{{ $section->subtitle }}</p>
            </div>
            @if($section->content_type === 'youtube' && $section->youtube_url)
                <div class="max-w-4xl mx-auto mb-8">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe src="{{ $section->youtube_url }}" class="w-full h-96 rounded-lg shadow-lg" allowfullscreen></iframe>
                    </div>
                </div>
            @endif
            <div class="text-gray-700 leading-relaxed max-w-4xl mx-auto">{!! nl2br(e($section->content)) !!}</div>
        </div>
    </section>
    @endforeach
@else
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-gray-600 text-lg">Konten tentang kami sedang dalam pengembangan.</p>
        </div>
    </section>
@endif
@endsection
