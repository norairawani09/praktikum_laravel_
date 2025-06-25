<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provinsi; // <-- Import model Provinsi

class ProvinsiSeeder extends Seeder
{
    public function run(): void
    {
        Provinsi::create(['nama' => 'Sumatera Utara']);
        Provinsi::create(['nama' => 'Jawa Barat']);
    }
}