<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\AnimeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AnimeHeroController;
use App\Http\Controllers\AnimeNontonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// routes/web.php

// Route untuk halaman Home dengan nama 'home'
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route tambahan jika ingin halaman /home juga mengarah ke home



Route::get('/anime-nonton', [AnimeNontonController::class, 'index'])->name('anime.nonton.index');
Route::get('/anime-nonton/{slug}', [AnimeNontonController::class, 'show'])->name('anime.nonton.show');


// Route::get('/anime-heroes', [AnimeHeroController::class, 'index'])->name('animeHeroes');
// Route::get('/streaming/{slug}', [AnimeHeroController::class, 'show'])->name('anime-hero.show');



Route::get('/contact', function () {
    return view('contact');
});

Route::post('/kontak-kirim', [ContactController::class, 'sendEmail'])->name('kontak.kirim');


Route::get('/list', function () {
    return view('list');
});

Route::get('/list', [AnimeController::class, 'index'])->name('list');


Route::get('informasi', function () {
    return view('informasi');
});

// Route::get('/list', [AnimeController::class, 'index']);

