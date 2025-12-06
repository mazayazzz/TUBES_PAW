<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Film;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat 1 user contoh
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        // 2. Buat 10 film dummy
        Film::factory()->count(10)->create()->each(function($film){
            // 3. Untuk setiap film, buat 3 jadwal
            $film->jadwal()->createMany([
                ['waktu_pemutaran' => now()->addDays(1)],
                ['waktu_pemutaran' => now()->addDays(2)],
                ['waktu_pemutaran' => now()->addDays(3)],
            ]);
        });
    }
}
