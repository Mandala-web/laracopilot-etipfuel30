@extends('layouts.app')

@section('content')
<section class="gradient-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold">Cek Status Anggota</h1>
        <p class="text-xl mt-4">Verifikasi keanggotaan menggunakan NIK atau Nomor Anggota</p>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-2xl mx-auto px-4">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <form action="{{ route('member.verify') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2">NIK / Nomor Anggota</label>
                    <input type="text" name="identifier" value="{{ old('identifier') }}" placeholder="Masukkan NIK atau Nomor Anggota" class="w-full border rounded-lg px-4 py-3 text-lg @error('identifier') border-red-500 @enderror" required>
                    @error('identifier')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                </div>
                <button type="submit" class="gradient-bg text-white px-8 py-3 rounded-lg font-semibold hover:opacity-90 transition w-full text-lg">Cek Status</button>
            </form>
            
            @if(isset($member))
                @if($member)
                    <div class="mt-8 p-6 bg-green-50 border-2 border-green-500 rounded-lg">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-check-circle text-green-600 text-4xl mr-4"></i>
                            <h2 class="text-2xl font-bold text-green-700">Data Anggota Ditemukan</h2>
                        </div>
                        <div class="space-y-3">
                            <div class="flex">
                                <span class="font-bold w-40">Nomor Anggota:</span>
                                <span>{{ $member->member_number }}</span>
                            </div>
                            <div class="flex">
                                <span class="font-bold w-40">NIK:</span>
                                <span>{{ $member->nik }}</span>
                            </div>
                            <div class="flex">
                                <span class="font-bold w-40">Nama:</span>
                                <span>{{ $member->name }}</span>
                            </div>
                            <div class="flex">
                                <span class="font-bold w-40">Email:</span>
                                <span>{{ $member->email ?? '-' }}</span>
                            </div>
                            <div class="flex">
                                <span class="font-bold w-40">Telepon:</span>
                                <span>{{ $member->phone ?? '-' }}</span>
                            </div>
                            <div class="flex">
                                <span class="font-bold w-40">Tanggal Bergabung:</span>
                                <span>{{ $member->join_date->format('d F Y') }}</span>
                            </div>
                            <div class="flex">
                                <span class="font-bold w-40">Status:</span>
                                <span class="px-3 py-1 rounded text-sm font-semibold
                                    @if($member->status === 'active') bg-green-200 text-green-800
                                    @elseif($member->status === 'inactive') bg-gray-200 text-gray-800
                                    @else bg-red-200 text-red-800 @endif">
                                    {{ ucfirst($member->status) }}
                                </span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="mt-8 p-6 bg-red-50 border-2 border-red-500 rounded-lg text-center">
                        <i class="fas fa-times-circle text-red-600 text-5xl mb-4"></i>
                        <h2 class="text-2xl font-bold text-red-700 mb-2">Data Tidak Ditemukan</h2>
                        <p class="text-gray-700">NIK atau Nomor Anggota yang Anda masukkan tidak terdaftar dalam sistem kami.</p>
                    </div>
                @endif
            @endif
        </div>
    </div>
</section>
@endsection
