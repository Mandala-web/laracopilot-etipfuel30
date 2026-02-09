@extends('layouts.app')

@section('content')
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold">Program Kerja</h1>
        <p class="text-xl mt-4">Program unggulan untuk kemajuan Sidoarjo</p>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($programs as $program)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale">
                @if($program->getFirstMediaUrl('featured_image'))
                    <img src="{{ $program->getFirstMediaUrl('featured_image') }}" alt="{{ $program->title }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                        <i class="fas fa-bullseye text-white text-6xl"></i>
                    </div>
                @endif
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-3">{{ $program->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $program->description }}</p>
                    <a href="{{ route('programs.show', $program->slug) }}" class="text-blue-600 font-semibold hover:underline">Selengkapnya →</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-8">{{ $programs->links() }}</div>
    </div>
</section>
@endsection
