<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // <-- INI BARIS YANG HILANG, SUDAH SAYA TAMBAHKAN

class CheckUserAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kode di bawah ini sudah benar, tidak perlu diubah.
        // Logikanya akan memeriksa apakah pengguna sudah login DAN usianya 18 atau lebih.
        if (Auth::check() && Auth::user()->usia >= 18) {
            // Jika ya, lanjutkan ke request berikutnya (ke halaman tujuan)
            return $next($request);
        }

        // Jika tidak memenuhi syarat, kembalikan ke halaman utama dengan pesan error.
        return redirect('/home')->with('error', 'Akses ditolak! Anda harus berusia minimal 18 tahun.');
    }
}
