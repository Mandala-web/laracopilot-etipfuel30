<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Structure;

class StructureSeeder extends Seeder
{
    public function run(): void
    {
        $structures = [
            ['name' => 'H. Ahmad Muhibbin, S.H., M.H.', 'position' => 'Ketua DPC', 'category' => 'Pimpinan', 'order' => 1],
            ['name' => 'Ir. Siti Nur Azizah, M.M.', 'position' => 'Wakil Ketua I', 'category' => 'Pimpinan', 'order' => 2],
            ['name' => 'Drs. Bambang Suryanto', 'position' => 'Wakil Ketua II', 'category' => 'Pimpinan', 'order' => 3],
            ['name' => 'Hj. Fatimah Zahra, S.Pd.', 'position' => 'Sekretaris', 'category' => 'Pengurus Harian', 'order' => 4],
            ['name' => 'Abdul Rohman, S.E., M.Si.', 'position' => 'Bendahara', 'category' => 'Pengurus Harian', 'order' => 5],
            ['name' => 'Dr. Muhammad Ridwan', 'position' => 'Ketua Bidang Organisasi', 'category' => 'Bidang', 'order' => 6],
            ['name' => 'Sri Wahyuni, S.Sos.', 'position' => 'Ketua Bidang Kaderisasi', 'category' => 'Bidang', 'order' => 7],
            ['name' => 'Agus Salim, S.H.', 'position' => 'Ketua Bidang Hukum', 'category' => 'Bidang', 'order' => 8],
            ['name' => 'Nur Hidayat, S.Kom.', 'position' => 'Ketua Bidang IT & Media', 'category' => 'Bidang', 'order' => 9],
            ['name' => 'Lilis Suryani, S.E.', 'position' => 'Ketua Bidang Ekonomi', 'category' => 'Bidang', 'order' => 10],
        ];

        foreach ($structures as $structure) {
            Structure::create($structure);
        }
    }
}