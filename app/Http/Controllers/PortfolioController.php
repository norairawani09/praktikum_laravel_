<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('Home');
    }

    public function profil()
    {
        $nama = "Nora Irawani Siregar";
        $npm = "228160013";
        return view('Profil', compact('nama', 'npm'));
    }

    public function pendidikan()
    {
        $kampus = "Universitas Medan Area";
        $prodi = "Teknik Informatika";
        return view('Pendidikan', compact('kampus', 'prodi'));
    }

    public function keahlian()
    {
        $skill = "Web Developer and Dancer";
        return view('Keahlian', compact('skill'));
    }
}
