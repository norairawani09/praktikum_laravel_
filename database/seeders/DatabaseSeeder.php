<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Hapus atau beri komentar pada seeder lama jika tidak diperlukan untuk tugas ini
        // $this->call([
        //     ProvinsiSeeder::class,
        //     KotaSeeder::class,
        //     KecamatanSeeder::class,
        //     KelurahanSeeder::class,
        // ]);

        // Panggil seeder untuk tugas yang sekarang
        $this->call([
            NilaiSeeder::class,
        ]);
    }
}