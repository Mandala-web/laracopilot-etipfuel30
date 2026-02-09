<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SettingSeeder::class,
            HomeSectionSeeder::class,
            ProgramSeeder::class,
            NewsSeeder::class,
            StructureSeeder::class,
            MemberSeeder::class,
        ]);
    }
}