@extends('layouts.app')

@section('content')
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold">Galeri Kegiatan</h1>
        <p class="text-xl mt-4">Dokumentasi kegiatan Nasdem Sidoarjo</p>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        @if($galleries->count() > 0)
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($galleries as $gallery)
                    <div class="w-full h-64 bg-gradient-to-br from-blue-400 to-purple-500 rounded-lg shadow-lg flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <i class="fas fa-image text-6xl mb-2"></i>
                            <h3 class="font-bold text-lg">{{ $gallery->title }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-8">{{ $galleries->links() }}</div>
        @else
            <div class="text-center py-12">
                <i class="fas fa-images text-gray-400 text-6xl mb-4"></i>
                <p class="text-gray-600 text-lg">Belum ada galeri yang ditambahkan.</p>
            </div>
        @endif
    </div>
</section>
@endsection
