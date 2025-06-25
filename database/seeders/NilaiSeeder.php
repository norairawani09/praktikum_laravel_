<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Nilai;

class NilaiSeeder extends Seeder
{
    public function run(): void
    {
        // Buat Mahasiswa
        $budi = Mahasiswa::create(['nama' => 'Nora Irawani']);
        $susan = Mahasiswa::create(['nama' => 'Puderta Sinulingga']);

        // Buat Matakuliah
        $web = Matakuliah::create(['nama' => 'Pemrograman Web']);
        $db = Matakuliah::create(['nama' => 'Basis Data']);

        // Buat Nilai
        Nilai::create(['mahasiswa_id' => $budi->id, 'matakuliah_id' => $web->id, 'nilai' => 85]);
        Nilai::create(['mahasiswa_id' => $budi->id, 'matakuliah_id' => $db->id, 'nilai' => 90]);
        Nilai::create(['mahasiswa_id' => $susan->id, 'matakuliah_id' => $web->id, 'nilai' => 92]);
    }
}