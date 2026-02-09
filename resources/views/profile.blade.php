@extends('layouts.app')

@section('content')
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold">Profile Partai</h1>
    </div>
</section>

@if($sections->count() > 0)
    @foreach($sections as $section)
    <section class="py-16 {{ $loop->even ? 'bg-white' : 'bg-gray-50' }}">
        <div class="max-w-7xl mx-auto px-4">
            <div class="{{ $loop->even ? 'md:flex md:flex-row-reverse' : 'md:flex' }} items-center gap-12">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    @if($section->icon)
                        <div class="text-center">
                            <i class="fas fa-flag text-9xl text-blue-600"></i>
                        </div>
                    @endif
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-4xl font-bold mb-4">{{ $section->title }}</h2>
                    <p class="text-xl text-gray-600 mb-6">{{ $section->subtitle }}</p>
                    <div class="text-gray-700 leading-relaxed">{!! nl2br(e($section->content)) !!}</div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
@else
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-gray-600 text-lg">Konten profile sedang dalam pengembangan.</p>
        </div>
    </section>
@endif
@endsection
