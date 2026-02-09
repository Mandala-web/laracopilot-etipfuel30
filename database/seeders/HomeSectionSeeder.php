<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeSection;

class HomeSectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            [
                'title' => 'Selamat Datang di Nasdem Sidoarjo',
                'subtitle' => 'Restorasi Indonesia Untuk Kehidupan yang Lebih Baik',
                'content' => 'Partai Nasdem Sidoarjo berkomitmen untuk membangun Indonesia yang lebih baik melalui program-program inovatif dan pemberdayaan masyarakat.',
                'content_type' => 'text',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Visi Kami',
                'subtitle' => 'Restorasi untuk Masa Depan',
                'content' => 'Mewujudkan masyarakat Sidoarjo yang sejahtera, adil, dan demokratis melalui pembangunan berkelanjutan.',
                'content_type' => 'icon',
                'icon' => 'fas fa-bullseye',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Misi Kami',
                'subtitle' => 'Program Nyata untuk Rakyat',
                'content' => 'Melaksanakan program pemberdayaan ekonomi rakyat, pendidikan berkualitas, kesehatan terjangkau, dan infrastruktur merata.',
                'content_type' => 'icon',
                'icon' => 'fas fa-tasks',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($sections as $section) {
            HomeSection::create($section);
        }
    }
}