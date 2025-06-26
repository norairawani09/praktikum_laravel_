<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\NilaiController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PortfolioController;

Route::get('/home', [PortfolioController::class, 'home']);
Route::get('/profil', [PortfolioController::class, 'profil']);
Route::get('/pendidikan', [PortfolioController::class, 'pendidikan']);
Route::get('/keahlian', [PortfolioController::class, 'keahlian']);
Route::get('/alamat', [AlamatController::class, 'index']);
Route::get('/nilai/{mahasiswaId}', [NilaiController::class, 'showNilaiMahasiswa'])->name('tampilnilai');
Route::get('/dashboard-khusus', function () {
    return view('dashboard-khusus');
})->middleware(['auth', 'check.age'])->name('dashboard.khusus');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
