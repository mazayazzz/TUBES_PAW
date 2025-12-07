<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Film;
use App\Models\Studio;
use App\Models\Jadwal;
use App\Models\Pelanggan;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use App\Models\DetailTiket;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. User dummy
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        // 2. Film dummy
        $films = Film::insert([
            [
                'judul' => 'Avengers: Endgame',
                'durasi' => 181,
                'genre' => 'Action',
                'rating' => 8.5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Frozen II',
                'durasi' => 103,
                'genre' => 'Animation',
                'rating' => 7.8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Joker',
                'durasi' => 122,
                'genre' => 'Drama',
                'rating' => 8.7,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        // 3. Studio dummy
        $studios = Studio::insert([
            [
                'nama_studio' => 'Studio A',
                'kapasitas' => 100,
            ],
            [
                'nama_studio' => 'Studio B',
                'kapasitas' => 80,
            ],
        ]);

        // 4. Jadwal dummy
        $jadwals = Jadwal::insert([
            [
                'id_film' => 1,
                'waktu_pemutaran' => '2025-12-10 19:00:00'
            ],
            [
                'id_film' => 2,
                'waktu_pemutaran' => '2025-12-11 16:00:00'
            ],
        ]);

        // 5. Pelanggan dummy
        $pelanggans = Pelanggan::insert([
            [
                'nama' => 'John Doe',
                'email' => 'john@example.com',
                'nomor_telepon' => '081234567890',
            ],
            [
                'nama' => 'Jane Smith',
                'email' => 'jane@example.com',
                'nomor_telepon' => '089876543210',
            ],
        ]);

        // 6. Pemesanan dummy
        $pemesanans = Pemesanan::insert([
            [
                'id_pelanggan' => 1,
                'id_jadwal' => 1,
                'jumlah_tiket' => 2,
            ],
            [
                'id_pelanggan' => 2,
                'id_jadwal' => 2,
                'jumlah_tiket' => 3,
            ],
        ]);

        // 7. Pembayaran dummy
        $pembayarans = Pembayaran::insert([
            [
                'id_pemesanan' => 1,
                'total_harga' => 50000,
                'metode_pembayaran' => 'Cash',
                'tanggal_pembayaran' => '2025-12-07',
            ],
            [
                'id_pemesanan' => 2,
                'total_harga' => 75000,
                'metode_pembayaran' => 'Transfer',
                'tanggal_pembayaran' => '2025-12-07',
            ],
        ]);

        // 8. Detail Tiket dummy
        $detailTiket = DetailTiket::insert([
            [
                'id_pemesanan' => 1,
                'harga' => 25000,
                'kategori_tiket' => 'VIP',
            ],
            [
                'id_pemesanan' => 2,
                'harga' => 25000,
                'kategori_tiket' => 'Reguler',
            ],
        ]);
    }
}
