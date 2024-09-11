<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class AnimeController extends Controller
{
    public function index() 
    {
        $animes = Anime::all();
        return view('list', compact('animes'));
    }
}
