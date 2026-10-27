<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Berita;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder

{
    public function run(): void
    {
     
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );

    
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password'),
            ]
        );

        // Membuat 10 berita menggunakan Factory
        Berita::factory(10)->create();
    }
}
