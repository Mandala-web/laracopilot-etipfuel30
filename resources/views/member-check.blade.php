<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Status Anggota - Nasdem Sidoarjo</title>
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
                    <a href="{{ route('programs.index') }}" class="hover:text-blue-200 transition">Program</a>
                    <a href="{{ route('news.index') }}" class="hover:text-blue-200 transition">Berita</a>
                    <a href="{{ route('gallery') }}" class="hover:text-blue-200 transition">Galeri</a>
                    <a href="{{ route('structure') }}" class="hover:text-blue-200 transition">Struktur</a>
                    <a href="{{ route('contact') }}" class="hover:text-blue-200 transition">Kontak</a>
                    <a href="{{ route('member.check') }}" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold hover:bg-blue-50 transition">Cek Anggota</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-12">
        <div class="max-w-4xl mx-auto px-4">
            <!-- Page Header -->
            <div class="text-center mb-12">
                <div class="inline-block bg-blue-100 rounded-full p-4 mb-4">
                    <i class="fas fa-id-card text-blue-600 text-5xl"></i>
                </div>
                <h1 class="text-4xl font-bold text-gray-800 mb-3">Cek Status Keanggotaan</h1>
                <p class="text-gray-600 text-lg">Verifikasi status keanggotaan Anda dengan NIK atau Nomor Anggota</p>
            </div>

            <!-- Search Form -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <form method="POST" action="{{ route('member.check.post') }}" class="space-y-6">
                    @csrf
                    <div>
                        <label for="identifier" class="block text-gray-700 font-semibold mb-3 text-lg">
                            <i class="fas fa-search text-blue-600 mr-2"></i>
                            Masukkan NIK atau Nomor Anggota
                        </label>
                        <input 
                            type="text" 
                            id="identifier" 
                            name="identifier" 
                            class="w-full px-6 py-4 text-lg border-2 border-gray-300 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" 
                            placeholder="Contoh: NSD000001 atau 3515000000000001"
                            required
                            value="{{ old('identifier') }}"
                        >
                        @error('identifier')
                            <p class="text-red-500 text-sm mt-2">
                                <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <button 
                        type="submit" 
                        class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-bold py-4 px-8 rounded-xl hover:from-blue-700 hover:to-blue-800 transform hover:scale-105 transition-all duration-200 shadow-lg text-lg"
                    >
                        <i class="fas fa-search mr-2"></i>
                        Cek Status Sekarang
                    </button>
                </form>

                <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
                    <p class="text-sm text-gray-700">
                        <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                        <strong>Tips:</strong> Gunakan NIK yang terdaftar di KTP atau Nomor Anggota yang diberikan saat pendaftaran.
                    </p>
                </div>
            </div>

            <!-- Result Section -->
            @if(isset($found))
                @if($found)
                    <!-- Member Found -->
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl shadow-xl p-8 border-2 border-green-300 animate-fade-in">
                        <div class="text-center mb-6">
                            <div class="inline-block bg-green-500 rounded-full p-4 mb-4">
                                <i class="fas fa-check-circle text-white text-5xl"></i>
                            </div>
                            <h2 class="text-3xl font-bold text-green-800 mb-2">Data Ditemukan!</h2>
                            <p class="text-green-700 text-lg">Anggota terdaftar dalam sistem kami</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 space-y-4">
                            <div class="flex items-start pb-4 border-b border-gray-200">
                                <div class="flex-shrink-0 w-12">
                                    <i class="fas fa-user text-blue-600 text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-500 font-medium">Nama Lengkap</p>
                                    <p class="text-xl font-bold text-gray-800">{{ $member->name }}</p>
                                </div>
                            </div>

                            <div class="flex items-start pb-4 border-b border-gray-200">
                                <div class="flex-shrink-0 w-12">
                                    <i class="fas fa-id-badge text-blue-600 text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-500 font-medium">Nomor Anggota</p>
                                    <p class="text-xl font-bold text-gray-800">{{ $member->member_number }}</p>
                                </div>
                            </div>

                            <div class="flex items-start pb-4 border-b border-gray-200">
                                <div class="flex-shrink-0 w-12">
                                    <i class="fas fa-id-card text-blue-600 text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-500 font-medium">NIK</p>
                                    <p class="text-xl font-bold text-gray-800">{{ $member->nik }}</p>
                                </div>
                            </div>

                            @if($member->email)
                            <div class="flex items-start pb-4 border-b border-gray-200">
                                <div class="flex-shrink-0 w-12">
                                    <i class="fas fa-envelope text-blue-600 text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-500 font-medium">Email</p>
                                    <p class="text-lg text-gray-800">{{ $member->email }}</p>
                                </div>
                            </div>
                            @endif

                            @if($member->phone)
                            <div class="flex items-start pb-4 border-b border-gray-200">
                                <div class="flex-shrink-0 w-12">
                                    <i class="fas fa-phone text-blue-600 text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-500 font-medium">Telepon</p>
                                    <p class="text-lg text-gray-800">{{ $member->phone }}</p>
                                </div>
                            </div>
                            @endif

                            <div class="flex items-start pb-4 border-b border-gray-200">
                                <div class="flex-shrink-0 w-12">
                                    <i class="fas fa-calendar text-blue-600 text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-500 font-medium">Tanggal Bergabung</p>
                                    <p class="text-lg text-gray-800">{{ $member->join_date->format('d F Y') }}</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12">
                                    <i class="fas fa-check-circle text-blue-600 text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-500 font-medium">Status Keanggotaan</p>
                                    <div class="mt-1">
                                        @if($member->status === 'active')
                                            <span class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 text-sm font-bold rounded-full">
                                                <i class="fas fa-check-circle mr-2"></i>
                                                Aktif
                                            </span>
                                        @elseif($member->status === 'inactive')
                                            <span class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-800 text-sm font-bold rounded-full">
                                                <i class="fas fa-pause-circle mr-2"></i>
                                                Tidak Aktif
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-4 py-2 bg-red-100 text-red-800 text-sm font-bold rounded-full">
                                                <i class="fas fa-ban mr-2"></i>
                                                Suspended
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Member Not Found -->
                    <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl shadow-xl p-8 border-2 border-red-300 animate-fade-in">
                        <div class="text-center">
                            <div class="inline-block bg-red-500 rounded-full p-4 mb-4">
                                <i class="fas fa-times-circle text-white text-5xl"></i>
                            </div>
                            <h2 class="text-3xl font-bold text-red-800 mb-2">Data Tidak Ditemukan</h2>
                            <p class="text-red-700 text-lg mb-6">{{ $message ?? 'NIK atau Nomor Anggota tidak terdaftar dalam sistem.' }}</p>
                            
                            <div class="bg-white rounded-xl p-6 text-left">
                                <h3 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>
                                    Saran:
                                </h3>
                                <ul class="space-y-2 text-gray-700">
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                        <span>Pastikan Anda memasukkan NIK atau Nomor Anggota dengan benar</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                        <span>Periksa kembali format penulisan (tanpa spasi atau karakter khusus)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                        <span>Hubungi sekretariat jika Anda sudah terdaftar namun data belum muncul</span>
                                    </li>
                                </ul>
                            </div>

                            <a href="{{ route('contact') }}" class="inline-block mt-6 bg-blue-600 text-white px-8 py-3 rounded-xl font-semibold hover:bg-blue-700 transition">
                                <i class="fas fa-envelope mr-2"></i>
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-16">
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

    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in {
            animation: fade-in 0.5s ease-out;
        }
    </style>
</body>
</html>
