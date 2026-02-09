@extends('layouts.app')

@section('content')
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold">Struktur Organisasi</h1>
        <p class="text-xl mt-4">Pengurus DPC Nasdem Sidoarjo</p>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        @if($structures->count() > 0)
            @foreach($structures as $category => $members)
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-center mb-8">{{ $category }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach($members as $member)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden text-center hover-scale">
                        <div class="w-full h-64 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                            <i class="fas fa-user text-white text-8xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{{ $member->name }}</h3>
                            <p class="text-blue-600 font-semibold">{{ $member->position }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        @else
            <div class="text-center py-12">
                <i class="fas fa-users text-gray-400 text-6xl mb-4"></i>
                <p class="text-gray-600 text-lg">Struktur organisasi sedang dalam penyusunan.</p>
            </div>
        @endif
    </div>
</section>
@endsection
