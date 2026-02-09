@extends('layouts.app')

@section('content')
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold">Hubungi Kami</h1>
        <p class="text-xl mt-4">Kami siap mendengar aspirasi Anda</p>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-bold mb-6">Informasi Kontak</h2>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <i class="fas fa-map-marker-alt text-blue-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h3 class="font-bold">Alamat</h3>
                            <p class="text-gray-600">{{ $settings->address ?? '' }}</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-phone text-blue-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h3 class="font-bold">Telepon</h3>
                            <p class="text-gray-600">{{ $settings->phone ?? '' }}</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-envelope text-blue-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h3 class="font-bold">Email</h3>
                            <p class="text-gray-600">{{ $settings->email ?? '' }}</p>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <h3 class="font-bold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        @if($settings->facebook)<a href="{{ $settings->facebook }}" target="_blank" class="text-3xl text-blue-600 hover:text-blue-700"><i class="fab fa-facebook"></i></a>@endif
                        @if($settings->twitter)<a href="{{ $settings->twitter }}" target="_blank" class="text-3xl text-blue-400 hover:text-blue-500"><i class="fab fa-twitter"></i></a>@endif
                        @if($settings->instagram)<a href="{{ $settings->instagram }}" target="_blank" class="text-3xl text-pink-600 hover:text-pink-700"><i class="fab fa-instagram"></i></a>@endif
                        @if($settings->youtube)<a href="{{ $settings->youtube }}" target="_blank" class="text-3xl text-red-600 hover:text-red-700"><i class="fab fa-youtube"></i></a>@endif
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-3xl font-bold mb-6">Kirim Pesan</h2>
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Nama Lengkap *</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded-lg px-4 py-2 @error('name') border-red-500 @enderror" required>
                        @error('name')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Email *</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded-lg px-4 py-2 @error('email') border-red-500 @enderror" required>
                        @error('email')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">No. Telepon</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" class="w-full border rounded-lg px-4 py-2">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Subjek *</label>
                        <input type="text" name="subject" value="{{ old('subject') }}" class="w-full border rounded-lg px-4 py-2 @error('subject') border-red-500 @enderror" required>
                        @error('subject')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Pesan *</label>
                        <textarea name="message" rows="5" class="w-full border rounded-lg px-4 py-2 @error('message') border-red-500 @enderror" required>{{ old('message') }}</textarea>
                        @error('message')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                    </div>
                    <button type="submit" class="gradient-bg text-white px-8 py-3 rounded-lg font-semibold hover:opacity-90 transition w-full">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
