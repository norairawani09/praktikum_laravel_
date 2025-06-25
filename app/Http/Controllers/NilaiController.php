<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa; // Pastikan ini ditambahkan

class NilaiController extends Controller
{
    public function showNilaiMahasiswa($mahasiswaId)
{
    // 1. Mengambil data mahasiswa beserta relasi 'nilais' dan 'matakuliah'
    // 'with()' adalah cara untuk eager loading, ini lebih efisien
    $mahasiswa = Mahasiswa::with('nilais.matakuliah')->find($mahasiswaId);

    // 2. Mengirim data variabel $mahasiswa ke sebuah view bernama 'tampil_nilai'
    // 'tampil_nilai' adalah nama file: tampil_nilai.blade.php
    return view('tampil_nilai', ['mahasiswa' => $mahasiswa]);
}
}