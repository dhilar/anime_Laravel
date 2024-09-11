<?php

// app/Models/AnimeNonton.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimeNonton extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'anime_nontons';

    // Atribut yang dapat diisi secara massal
    protected $fillable = [
        'title',
        'description',
        'image',
        'video',
        'slug',
    ];
}
