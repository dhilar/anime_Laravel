<?php

// app/Http/Controllers/AnimeNontonController.php

namespace App\Http\Controllers;

use App\Models\AnimeNonton;
use Illuminate\Http\Request;

class AnimeNontonController extends Controller
{
    public function index()
    {
        // Mengambil semua anime untuk ditampilkan pada halaman daftar
        $animeNontons = AnimeNonton::all();
        return view('anime_nonton.index', compact('animeNontons'));
    }

    public function show($slug)
    {
        // Mengambil anime berdasarkan slug
        $animeNonton = AnimeNonton::where('slug', $slug)->firstOrFail();
        return view('anime_nonton.show', compact('animeNonton'));
    }
}
