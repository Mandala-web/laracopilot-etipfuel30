<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::create([
            'site_name' => 'Nasdem Sidoarjo',
            'site_tagline' => 'Restorasi Indonesia',
            'email' => 'info@nasdemsidoarjo.com',
            'phone' => '(031) 1234567',
            'address' => 'Jl. Pahlawan No. 123, Sidoarjo, Jawa Timur 61200',
            'facebook' => 'https://facebook.com/nasdemsidoarjo',
            'twitter' => 'https://twitter.com/nasdemsidoarjo',
            'instagram' => 'https://instagram.com/nasdemsidoarjo',
            'youtube' => 'https://youtube.com/@nasdemsidoarjo',
            'linkedin' => 'https://linkedin.com/company/nasdemsidoarjo',
            'meta_title' => 'Nasdem Sidoarjo - Restorasi Indonesia',
            'meta_description' => 'Website resmi Partai Nasdem Sidoarjo. Informasi program, berita, dan kegiatan partai untuk restorasi Indonesia yang lebih baik.',
            'meta_keywords' => 'nasdem, sidoarjo, partai, politik, restorasi indonesia, program',
        ]);
    }
}