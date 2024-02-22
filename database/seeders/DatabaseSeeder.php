<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'nik' => '12312312312312',
            'username' => 'admin',
            'email' => '1CqFP@example.com',
            'nama_lengkap' => 'Admin',
            'jenis_kelamin' => 'L',
            'nomor_telepon' => '081234567890',
            'alamat' => 'Jl. Admin',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);
    }
}
