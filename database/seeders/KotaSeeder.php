<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kota; // <-- Import model Kota

class KotaSeeder extends Seeder
{
    public function run(): void
    {
        // Kota untuk Sumatera Utara (ID provinsi = 1)
        Kota::create(['provinsi_id' => 1, 'nama' => 'Kabanjahe']);
        Kota::create(['provinsi_id' => 1, 'nama' => 'Medan']);
        
        // Kota untuk Jawa Barat (ID provinsi = 2)
        Kota::create(['provinsi_id' => 2, 'nama' => 'Bandung']);
        Kota::create(['provinsi_id' => 2, 'nama' => 'Bogor']);
    }
}