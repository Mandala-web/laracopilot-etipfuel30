<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program - Nasdem Sidoarjo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-600 to-blue-800 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <div class="bg-white rounded-full p-2">
                        <i class="fas fa-flag text-blue-600 text-2xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold">Nasdem Sidoarjo</h1>
                        <p class="text-sm text-blue-100">Restorasi Indonesia</p>
                    </div>
                </div>
                <nav class="hidden md:flex space-x-6">
                    <a href="{{ route('home') }}" class="hover:text-blue-200 transition">Beranda</a>
                    <a href="{{ route('profile') }}" class="hover:text-blue-200 transition">Profile</a>
                    <a href="{{ route('about') }}" class="hover:text-blue-200 transition">Tentang</a>
                    <a href="{{ route('programs.index') }}" class="text-blue-200 font-semibold">Program</a>
                    <a href="{{ route('news.index') }}" class="hover:text-blue-200 transition">Berita</a>
                    <a href="{{ route('gallery') }}" class="hover:text-blue-200 transition">Galeri</a>
                    <a href="{{ route('structure') }}" class="hover:text-blue-200 transition">Struktur</a>
                    <a href="{{ route('contact') }}" class="hover:text-blue-200 transition">Kontak</a>
                    <a href="{{ route('member.check') }}" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold hover:bg-blue-50 transition">Cek Anggota</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="inline-block bg-white/10 backdrop-blur-sm rounded-full px-6 py-2 mb-6">
                <i class="fas fa-tasks mr-2"></i>
                <span class="font-semibold">Program Unggulan</span>
            </div>
            <h1 class="text-5xl font-bold mb-4">Program Kerja Kami</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">Berbagai program nyata untuk kesejahteraan masyarakat Sidoarjo</p>
        </div>
    </section>

    <!-- Programs Grid -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            @if($programs->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($programs as $program)
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-700 p-8 text-white">
                            <div class="bg-white/20 backdrop-blur-sm rounded-full w-16 h-16 flex items-center justify-center mb-4">
                                <i class="fas fa-flag text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 line-clamp-2">{{ $program->title }}</h3>
                        </div>
                        
                        <div class="p-6">
                            @if($program->description)
                                <p class="text-gray-600 mb-6 line-clamp-3">{{ $program->description }}</p>
                            @endif
                            
                            <a 
                                href="{{ route('programs.show', $program->slug) }}" 
                                class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition group"
                            >
                                <span>Selengkapnya</span>
                                <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <!-- Empty State -->
                <div class="text-center py-16">
                    <div class="inline-block bg-gray-100 rounded-full p-8 mb-6">
                        <i class="fas fa-tasks text-gray-400 text-6xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Belum Ada Program</h3>
                    <p class="text-gray-600 mb-8">Program kerja akan segera ditambahkan.</p>
                    <a href="{{ route('home') }}" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-xl font-semibold hover:bg-blue-700 transition">
                        <i class="fas fa-home mr-2"></i>
                        Kembali ke Beranda
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">Bergabunglah dengan Kami</h2>
            <p class="text-xl text-blue-100 mb-8">Mari bersama-sama mewujudkan program nyata untuk Sidoarjo yang lebih baik</p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 px-8 py-4 rounded-xl font-bold hover:bg-blue-50 transition-all duration-300 transform hover:scale-105 shadow-lg">
                <i class="fas fa-envelope mr-2"></i>
                Hubungi Kami
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Nasdem Sidoarjo</h3>
                    <p class="text-gray-300">Partai Nasional Demokrat Kabupaten Sidoarjo</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition">Beranda</a></li>
                        <li><a href="{{ route('programs.index') }}" class="text-gray-300 hover:text-white transition">Program</a></li>
                        <li><a href="{{ route('news.index') }}" class="text-gray-300 hover:text-white transition">Berita</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><i class="fas fa-envelope mr-2"></i>info@nasdemsidoarjo.com</li>
                        <li><i class="fas fa-phone mr-2"></i>(031) 1234567</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i>Sidoarjo, Jawa Timur</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition"><i class="fab fa-facebook text-2xl"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white transition"><i class="fab fa-twitter text-2xl"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white transition"><i class="fab fa-instagram text-2xl"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white transition"><i class="fab fa-youtube text-2xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Nasdem Sidoarjo. All rights reserved.</p>
                <p class="mt-2">Made with <i class="fas fa-heart text-red-500"></i> by <a href="https://laracopilot.com/" target="_blank" class="hover:text-white transition">LaraCopilot</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
