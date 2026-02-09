<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Illuminate\Support\Str;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $newsData = [
            [
                'title' => 'Nasdem Sidoarjo Gelar Bakti Sosial untuk Warga Terdampak Banjir',
                'excerpt' => 'Partai Nasdem Sidoarjo menggelar bakti sosial dengan memberikan bantuan sembako dan pakaian layak pakai kepada warga terdampak banjir di 3 kecamatan.',
                'content' => '<p>Sidoarjo - Partai Nasdem Sidoarjo mengadakan kegiatan bakti sosial pada hari Minggu (15/01/2024) untuk membantu warga yang terdampak banjir. Kegiatan ini dilaksanakan di 3 kecamatan yang paling parah terdampak yaitu Tanggulangin, Candi, dan Porong.</p><p>Ketua DPC Nasdem Sidoarjo menyatakan bahwa bantuan ini merupakan wujud kepedulian partai terhadap masyarakat yang sedang mengalami musibah. Total bantuan yang disalurkan berupa 500 paket sembako, 300 pakaian layak pakai, dan obat-obatan.</p><p>"Ini adalah tanggung jawab kita bersama untuk saling membantu sesama. Kami berharap bantuan ini dapat meringankan beban warga yang terdampak," ujar Ketua DPC.</p>',
                'author' => 'Tim Media Nasdem',
                'published_at' => Carbon::now()->subDays(5),
            ],
            [
                'title' => 'Peluncuran Program Beasiswa Pendidikan untuk 100 Siswa Berprestasi',
                'excerpt' => 'Nasdem Sidoarjo meluncurkan program beasiswa pendidikan yang akan diberikan kepada 100 siswa berprestasi dari keluarga kurang mampu.',
                'content' => '<p>Program beasiswa ini merupakan bagian dari komitmen Nasdem Sidoarjo dalam meningkatkan kualitas pendidikan. Beasiswa akan diberikan mulai dari tingkat SD hingga SMA dengan nilai total Rp 500 juta.</p><p>Para penerima beasiswa akan mendapatkan bantuan biaya pendidikan, buku, seragam, dan uang saku bulanan. Seleksi dilakukan berdasarkan prestasi akademik dan kondisi ekonomi keluarga.</p><p>Pendaftaran dibuka hingga akhir bulan ini melalui website resmi dan kantor DPC Nasdem Sidoarjo.</p>',
                'author' => 'Redaksi',
                'published_at' => Carbon::now()->subDays(10),
            ],
            [
                'title' => 'Kunjungan Kerja DPP Nasdem ke Sidoarjo Bahas Program Strategis',
                'excerpt' => 'Delegasi DPP Partai Nasdem mengunjungi Sidoarjo untuk membahas program strategis pembangunan dan pemberdayaan masyarakat.',
                'content' => '<p>Kunjungan kerja ini bertujuan untuk meninjau langsung implementasi program-program Nasdem di tingkat kabupaten serta merumuskan strategi pembangunan ke depan.</p><p>Dalam pertemuan dengan pengurus DPC dan tokoh masyarakat, DPP memberikan arahan terkait penguatan organisasi dan optimalisasi program pemberdayaan ekonomi rakyat.</p><p>Beberapa program baru juga dicanangkan termasuk pelatihan kewirausahaan digital dan pengembangan sentra UMKM berbasis teknologi.</p>',
                'author' => 'Humas DPC',
                'published_at' => Carbon::now()->subDays(15),
            ],
            [
                'title' => 'Nasdem Sidoarjo Dukung Festival UMKM Lokal dengan 200 Stand',
                'excerpt' => 'Festival UMKM Sidoarjo yang didukung penuh oleh Nasdem menampilkan 200 stand produk lokal berkualitas dengan omzet mencapai miliaran rupiah.',
                'content' => '<p>Festival UMKM yang berlangsung selama 3 hari ini menampilkan berbagai produk unggulan Sidoarjo mulai dari kuliner, kerajinan, fashion, hingga produk digital.</p><p>Acara ini tidak hanya sebagai ajang pameran tetapi juga workshop, seminar bisnis, dan networking untuk pelaku UMKM. Target omzet festival mencapai Rp 5 miliar.</p><p>Nasdem Sidoarjo berkomitmen terus mendukung pertumbuhan UMKM lokal sebagai tulang punggung ekonomi daerah.</p>',
                'author' => 'Tim Liputan',
                'published_at' => Carbon::now()->subDays(20),
            ],
            [
                'title' => 'Rapat Koordinasi Pengurus: Evaluasi dan Rencana Kerja 2024',
                'excerpt' => 'Pengurus DPC Nasdem Sidoarjo menggelar rapat koordinasi untuk mengevaluasi program 2023 dan menyusun rencana kerja strategis 2024.',
                'content' => '<p>Rapat koordinasi dihadiri oleh seluruh pengurus DPC, ketua bidang, dan komisariat se-Sidoarjo. Agenda utama meliputi evaluasi capaian program tahun lalu dan perencanaan program prioritas tahun ini.</p><p>Beberapa program prioritas 2024 yang disepakati antara lain: intensifikasi pembinaan kader, ekspansi program sosial, penguatan basis massa, dan persiapan menghadapi pemilu.</p><p>Ketua DPC menekankan pentingnya soliditas dan kerja sama tim dalam mewujudkan visi restorasi Indonesia di tingkat lokal.</p>',
                'author' => 'Sekretariat DPC',
                'published_at' => Carbon::now()->subDays(25),
            ],
            [
                'title' => 'Pelatihan Kader Muda: Membangun Pemimpin Masa Depan',
                'excerpt' => 'Nasdem Sidoarjo mengadakan pelatihan intensif untuk kader muda dengan materi kepemimpinan, strategi politik, dan pemberdayaan masyarakat.',
                'content' => '<p>Pelatihan kader muda ini diikuti oleh 75 peserta dari berbagai kecamatan. Materi yang diberikan meliputi dasar-dasar kepemimpinan, public speaking, strategi kampanye, dan pemberdayaan masyarakat.</p><p>Narasumber berasal dari DPP Nasdem, akademisi, dan praktisi politik berpengalaman. Pelatihan berlangsung selama 3 hari dengan metode teori dan praktik lapangan.</p><p>"Kader muda adalah investasi masa depan partai. Mereka harus dibekali dengan pengetahuan dan keterampilan yang mumpuni," kata Ketua Bidang Kaderisasi.</p>',
                'author' => 'Bidang Kaderisasi',
                'published_at' => Carbon::now()->subDays(30),
            ],
        ];

        foreach ($newsData as $news) {
            News::create([
                'title' => $news['title'],
                'slug' => Str::slug($news['title']),
                'excerpt' => $news['excerpt'],
                'content' => $news['content'],
                'author' => $news['author'],
                'is_published' => true,
                'published_at' => $news['published_at'],
                'views' => rand(50, 500),
            ]);
        }
    }
}