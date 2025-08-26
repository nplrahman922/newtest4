<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menggunakan updateOrCreate untuk menghindari duplikasi jika seeder dijalankan berkali-kali
        User::updateOrCreate(
            [
                // Kunci pencarian: cari user dengan email ini
                'email' => 'admin@example.com',
            ],
            [
                // Data yang akan dibuat atau di-update
                'name' => 'Admin',
                'password' => Hash::make('password'), // Ganti 'password' dengan password yang aman
                'role' => 'admin', // <-- Ini bagian terpenting
                'email_verified_at' => now(), // Opsional: langsung verifikasi email
            ]
        );
    }
}
