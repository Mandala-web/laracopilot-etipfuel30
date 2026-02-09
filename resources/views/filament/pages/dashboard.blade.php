<x-filament-panels::page>
    <div class="grid gap-6">
        <!-- Welcome Card -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-xl shadow-lg p-8 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Selamat Datang, {{ auth()->user()->name }}! 👋</h2>
                    <p class="text-blue-100 text-lg">Dashboard Admin Nasdem Sidoarjo</p>
                    <p class="text-blue-200 text-sm mt-2">{{ now()->isoFormat('dddd, D MMMM YYYY') }}</p>
                </div>
                <div class="hidden md:block">
                    <div class="bg-white/10 backdrop-blur-sm rounded-full p-6">
                        <svg class="w-20 h-20" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Widgets -->
        {{ $this->getWidgets() }}

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-blue-500 hover:shadow-xl transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-medium">Quick Action</p>
                        <h3 class="text-xl font-bold text-gray-800 mt-1">Tambah Berita</h3>
                    </div>
                    <div class="bg-blue-100 rounded-full p-3">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </div>
                </div>
                <a href="/admin/news/create" class="inline-block mt-4 text-blue-600 font-semibold hover:text-blue-800 transition">
                    Buat Berita Baru →
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500 hover:shadow-xl transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-medium">Quick Action</p>
                        <h3 class="text-xl font-bold text-gray-800 mt-1">Tambah Program</h3>
                    </div>
                    <div class="bg-green-100 rounded-full p-3">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                </div>
                <a href="/admin/programs/create" class="inline-block mt-4 text-green-600 font-semibold hover:text-green-800 transition">
                    Buat Program Baru →
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-purple-500 hover:shadow-xl transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-medium">Quick Action</p>
                        <h3 class="text-xl font-bold text-gray-800 mt-1">Lihat Pesan</h3>
                    </div>
                    <div class="bg-purple-100 rounded-full p-3">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                </div>
                <a href="/admin/contacts" class="inline-block mt-4 text-purple-600 font-semibold hover:text-purple-800 transition">
                    Buka Inbox →
                </a>
            </div>
        </div>

        <!-- Recent Activity Info -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Informasi Sistem
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="text-gray-600 mb-2"><span class="font-semibold">Versi Laravel:</span> {{ app()->version() }}</p>
                    <p class="text-gray-600 mb-2"><span class="font-semibold">Versi PHP:</span> {{ PHP_VERSION }}</p>
                    <p class="text-gray-600 mb-2"><span class="font-semibold">Environment:</span> {{ app()->environment() }}</p>
                </div>
                <div>
                    <p class="text-gray-600 mb-2"><span class="font-semibold">Total Users:</span> {{ \App\Models\User::count() }}</p>
                    <p class="text-gray-600 mb-2"><span class="font-semibold">Login Terakhir:</span> {{ now()->isoFormat('HH:mm') }}</p>
                    <p class="text-gray-600 mb-2"><span class="font-semibold">Status:</span> <span class="inline-flex items-center px-2 py-1 bg-green-100 text-green-800 text-xs font-bold rounded-full">Online</span></p>
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page>
