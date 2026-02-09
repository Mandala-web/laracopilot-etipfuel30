<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create default admin user
        User::create([
            'name' => 'Admin Nasdem',
            'email' => 'admin@nasdem.com',
            'password' => Hash::make('admin123456'),
            'email_verified_at' => now(),
        ]);

        // Create additional test users
        User::create([
            'name' => 'Manager Nasdem',
            'email' => 'manager@nasdem.com',
            'password' => Hash::make('manager123'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Editor Nasdem',
            'email' => 'editor@nasdem.com',
            'password' => Hash::make('editor123'),
            'email_verified_at' => now(),
        ]);
    }
}