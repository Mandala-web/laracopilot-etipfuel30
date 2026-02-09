<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings->meta_title ?? $settings->site_name ?? 'Nasdem Sidoarjo' }}</title>
    <meta name="description" content="{{ $settings->meta_description ?? 'Website Partai Nasdem Sidoarjo' }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg { background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%); }
        .hover-scale { transition: transform 0.3s ease; }
        .hover-scale:hover { transform: scale(1.05); }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .fade-in { animation: fadeIn 0.8s ease-out; }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="gradient-bg text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center">
                    <div>
                        <h1 class="text-2xl font-bold">{{ $settings->site_name ?? 'Nasdem Sidoarjo' }}</h1>
                        <p class="text-sm text-blue-100">{{ $settings->site_tagline ?? 'Restorasi Indonesia' }}</p>
                    </div>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="{{ route('home') }}" class="hover:text-blue-200 transition">Beranda</a>
                    <a href="{{ route('profile') }}" class="hover:text-blue-200 transition">Profile</a>
                    <a href="{{ route('about') }}" class="hover:text-blue-200 transition">Tentang</a>
                    <a href="{{ route('programs') }}" class="hover:text-blue-200 transition">Program</a>
                    <a href="{{ route('news') }}" class="hover:text-blue-200 transition">Berita</a>
                    <a href="{{ route('gallery') }}" class="hover:text-blue-200 transition">Galeri</a>
                    <a href="{{ route('structure') }}" class="hover:text-blue-200 transition">Struktur</a>
                    <a href="{{ route('contact') }}" class="hover:text-blue-200 transition">Kontak</a>
                    <a href="{{ route('member.check') }}" class="bg-white text-blue-600 px-4 py-2 rounded-lg hover:bg-blue-50 transition font-semibold">Cek Anggota</a>
                </div>
                <button id="mobile-menu-btn" class="md:hidden">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-blue-700 px-4 py-4 space-y-2">
            <a href="{{ route('home') }}" class="block hover:bg-blue-800 px-3 py-2 rounded">Beranda</a>
            <a href="{{ route('profile') }}" class="block hover:bg-blue-800 px-3 py-2 rounded">Profile</a>
            <a href="{{ route('about') }}" class="block hover:bg-blue-800 px-3 py-2 rounded">Tentang</a>
            <a href="{{ route('programs') }}" class="block hover:bg-blue-800 px-3 py-2 rounded">Program</a>
            <a href="{{ route('news') }}" class="block hover:bg-blue-800 px-3 py-2 rounded">Berita</a>
            <a href="{{ route('gallery') }}" class="block hover:bg-blue-800 px-3 py-2 rounded">Galeri</a>
            <a href="{{ route('structure') }}" class="block hover:bg-blue-800 px-3 py-2 rounded">Struktur</a>
            <a href="{{ route('contact') }}" class="block hover:bg-blue-800 px-3 py-2 rounded">Kontak</a>
            <a href="{{ route('member.check') }}" class="block bg-white text-blue-600 px-3 py-2 rounded font-semibold">Cek Anggota</a>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-2">{{ $settings->site_name ?? 'Nasdem Sidoarjo' }}</h3>
                <p class="text-gray-400">{{ $settings->site_tagline ?? 'Restorasi Indonesia' }}</p>
            </div>
            <div>
                <h4 class="font-bold mb-4">Navigasi</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="{{ route('home') }}" class="hover:text-white">Beranda</a></li>
                    <li><a href="{{ route('profile') }}" class="hover:text-white">Profile</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white">Tentang</a></li>
                    <li><a href="{{ route('programs') }}" class="hover:text-white">Program</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Informasi</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="{{ route('news') }}" class="hover:text-white">Berita</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:text-white">Galeri</a></li>
                    <li><a href="{{ route('structure') }}" class="hover:text-white">Struktur</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Kontak Kami</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><i class="fas fa-envelope mr-2"></i>{{ $settings->email ?? 'info@nasdem.com' }}</li>
                    <li><i class="fas fa-phone mr-2"></i>{{ $settings->phone ?? '(031) 1234567' }}</li>
                    <li><i class="fas fa-map-marker-alt mr-2"></i>{{ $settings->address ?? 'Sidoarjo, Jawa Timur' }}</li>
                </ul>
                <div class="flex space-x-3 mt-4">
                    @if($settings->facebook ?? false)<a href="{{ $settings->facebook }}" target="_blank" class="text-2xl hover:text-blue-400"><i class="fab fa-facebook"></i></a>@endif
                    @if($settings->instagram ?? false)<a href="{{ $settings->instagram }}" target="_blank" class="text-2xl hover:text-pink-400"><i class="fab fa-instagram"></i></a>@endif
                    @if($settings->youtube ?? false)<a href="{{ $settings->youtube }}" target="_blank" class="text-2xl hover:text-red-400"><i class="fab fa-youtube"></i></a>@endif
                </div>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-8 pt-6 text-center text-sm text-gray-400">
            <p>&copy; {{ date('Y') }} {{ $settings->site_name ?? 'Nasdem Sidoarjo' }}. All rights reserved.</p>
            <p class="mt-2">Made with ❤️ by <a href="https://laracopilot.com/" target="_blank" class="text-blue-400 hover:underline">LaraCopilot</a></p>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
