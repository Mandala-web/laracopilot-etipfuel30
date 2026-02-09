<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        $names = [
            'Ahmad Fauzi', 'Siti Aminah', 'Budi Santoso', 'Dewi Lestari', 'Eko Prasetyo',
            'Fitri Handayani', 'Gunawan', 'Hana Pertiwi', 'Indra Wijaya', 'Joko Susilo',
            'Kartika Sari', 'Lukman Hakim', 'Maya Anggraini', 'Nur Rohman', 'Olivia Putri',
            'Putra Ramadan', 'Qori Amelia', 'Ridwan Abdullah', 'Siska Wulandari', 'Taufik Hidayat'
        ];

        for ($i = 1; $i <= 20; $i++) {
            Member::create([
                'member_number' => 'NSD' . str_pad($i, 6, '0', STR_PAD_LEFT),
                'nik' => '351500000000000' . $i,
                'name' => $names[$i - 1],
                'email' => strtolower(str_replace(' ', '', $names[$i - 1])) . '@email.com',
                'phone' => '08' . rand(1000000000, 9999999999),
                'address' => 'Jl. Contoh No. ' . $i . ', Sidoarjo, Jawa Timur',
                'join_date' => Carbon::now()->subMonths(rand(1, 36)),
                'status' => 'active',
            ]);
        }
    }
}