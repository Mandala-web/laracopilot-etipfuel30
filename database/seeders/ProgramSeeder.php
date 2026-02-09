<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;
use Illuminate\Support\Str;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        $programs = [
            [
                'title' => 'Pemberdayaan Ekonomi Rakyat',
                'description' => 'Program pelatihan kewirausahaan dan akses permodalan untuk UMKM Sidoarjo',
                'content' => '<p>Program ini bertujuan untuk meningkatkan kesejahteraan ekonomi masyarakat Sidoarjo melalui pelatihan kewirausahaan, pendampingan usaha, dan kemudahan akses permodalan.</p><p>Target program meliputi pelaku UMKM, ibu rumah tangga, dan pemuda yang ingin berwirausaha.</p>',
            ],
            [
                'title' => 'Pendidikan Berkualitas untuk Semua',
                'description' => 'Beasiswa pendidikan dan peningkatan kualitas sarana prasarana sekolah',
                'content' => '<p>Setiap anak berhak mendapatkan pendidikan berkualitas. Program ini menyediakan beasiswa untuk siswa berprestasi dan kurang mampu, serta renovasi sekolah-sekolah yang membutuhkan.</p>',
            ],
            [
                'title' => 'Kesehatan Masyarakat Terjangkau',
                'description' => 'Layanan kesehatan gratis dan peningkatan fasilitas kesehatan',
                'content' => '<p>Program kesehatan mencakup pemeriksaan kesehatan gratis berkala, penyediaan obat-obatan esensial, dan peningkatan kualitas puskesmas dan posyandu di seluruh Sidoarjo.</p>',
            ],
            [
                'title' => 'Infrastruktur Merata',
                'description' => 'Pembangunan jalan, jembatan, dan sarana publik di seluruh kecamatan',
                'content' => '<p>Infrastruktur yang baik adalah kunci kemajuan daerah. Program ini fokus pada perbaikan jalan rusak, pembangunan jembatan penghubung, dan sarana publik seperti taman dan lapangan olahraga.</p>',
            ],
            [
                'title' => 'Lingkungan Hijau dan Bersih',
                'description' => 'Program penghijauan dan pengelolaan sampah berkelanjutan',
                'content' => '<p>Menjaga kelestarian lingkungan melalui program penghijauan, bank sampah, dan edukasi pengelolaan sampah ramah lingkungan untuk generasi mendatang.</p>',
            ],
            [
                'title' => 'Pemberdayaan Pemuda dan Olahraga',
                'description' => 'Wadah kreativitas pemuda dan pembinaan atlet berprestasi',
                'content' => '<p>Memfasilitasi pemuda Sidoarjo untuk mengembangkan kreativitas dan bakat olahraga melalui pelatihan, kompetisi, dan pembinaan intensif untuk atlet berbakat.</p>',
            ],
        ];

        foreach ($programs as $program) {
            Program::create([
                'title' => $program['title'],
                'slug' => Str::slug($program['title']),
                'description' => $program['description'],
                'content' => $program['content'],
                'is_active' => true,
            ]);
        }
    }
}