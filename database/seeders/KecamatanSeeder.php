<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kecamatan; // <-- Import model Kecamatan

class KecamatanSeeder extends Seeder
{
    public function run(): void
    {
        // Kecamatan untuk Kabanjahe (ID kota = 1)
        Kecamatan::create(['kota_id' => 1, 'nama' => 'Kec. Kabanjahe']);

        // Kecamatan untuk Medan (ID kota = 2)
        Kecamatan::create(['kota_id' => 2, 'nama' => 'Kec. Medan Baru']);

        // Kecamatan untuk Bandung (ID kota = 3)
        Kecamatan::create(['kota_id' => 3, 'nama' => 'Kec. Sukajadi']);

        // Kecamatan untuk Bogor (ID kota = 4)
        Kecamatan::create(['kota_id' => 4, 'nama' => 'Kec. Bogor Tengah']);
    }
}