<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\NilaiController;

Route::get('/', [GreetingsController::class, 'welcome']);

use App\Http\Controllers\PortfolioController;

Route::get('/home', [PortfolioController::class, 'home']);
Route::get('/profil', [PortfolioController::class, 'profil']);
Route::get('/pendidikan', [PortfolioController::class, 'pendidikan']);
Route::get('/keahlian', [PortfolioController::class, 'keahlian']);
Route::get('/alamat', [AlamatController::class, 'index']);
Route::get('/nilai/{mahasiswaId}', [NilaiController::class, 'showNilaiMahasiswa'])->name('tampilnilai');

