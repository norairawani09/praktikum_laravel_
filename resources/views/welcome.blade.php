@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @auth
                        {{-- Bagian ini akan tampil JIKA PENGGUNA SUDAH LOGIN --}}
                        <p>Halo, {{ Auth::user()->name }}! Anda sudah login.</p>
                        <p>Anda bisa melanjutkan ke dashboard utama Anda.</p>
                        <a href="{{ url('/home') }}" class="btn btn-primary">Pergi ke Halaman Home</a>
                    @else
                        {{-- Bagian ini akan tampil JIKA PENGGUNA BELUM LOGIN (tamu) --}}
                        <p>Selamat datang di aplikasi kami!</p>
                        <p>Silakan login untuk melanjutkan, atau register jika Anda belum memiliki akun.</p>
                        {{-- Tombol login dan register tidak perlu ditampilkan di sini karena sudah ada di navbar atas --}}
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection