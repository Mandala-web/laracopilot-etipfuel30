@extends('layouts.app')

@section('content')
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-5xl font-bold">{{ $program->title }}</h1>
        <p class="text-xl mt-4">{{ $program->description }}</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        @if($program->getFirstMediaUrl('featured_image'))
            <img src="{{ $program->getFirstMediaUrl('featured_image') }}" alt="{{ $program->title }}" class="w-full rounded-lg shadow-lg mb-8">
        @endif
        <div class="prose max-w-none text-gray-700 leading-relaxed">{!! nl2br(e($program->content)) !!}</div>
    </div>
</section>

@if($relatedPrograms->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8">Program Lainnya</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedPrograms as $related)
            <a href="{{ route('programs.show', $related->slug) }}" class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale">
                @if($related->getFirstMediaUrl('featured_image'))
                    <img src="{{ $related->getFirstMediaUrl('featured_image') }}" alt="{{ $related->title }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                        <i class="fas fa-bullseye text-white text-5xl"></i>
                    </div>
                @endif
                <div class="p-6">
                    <h3 class="text-xl font-bold">{{ $related->title }}</h3>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
