<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi; // <-- PENTING: Import model Provinsi

class AlamatController extends Controller
{
    /**
     * Menampilkan halaman utama dengan data provinsi.
     */
    public function index()
    {
        // 1. Ambil semua data provinsi dari database
        $provinsis = Provinsi::all();

        // 2. Kirim data provinsi ke sebuah view bernama 'alamat'
        return view('alamat', ['provinsis' => $provinsis]);
    }
}