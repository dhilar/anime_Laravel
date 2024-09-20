<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AnimeNonton;

class AnimeNontonSeeder extends Seeder
{
    public function run()
    {
        AnimeNonton::create([
            'title' => 'High Card',
            'description' => 'Anime yang menceritakan Finn yang masuk ke dunia kartu sihir.',
            'image' => 'css/images/anime-1.jpg',
            'video' => 'video/AnimeWorld_Horimiya_01.mp4',
            'slug' => 'high-card'
        ]);

        AnimeNonton::create([
            'title' => 'Charllote',
            'description' => 'Remaja dengan kekuatan khusus dengan cerita penuh intrik.',
            'image' => 'css/images/anime-2.jpeg',
            'video' => 'video/AnimeWorld_Charllote_01.mp4',
            'slug' => 'charllote'
        ]);

        AnimeNonton::create([
            'title' => 'One Piece',
            'description' => 'Anime One Piece mengisahkan Gol D. Roger yang dikenal sebagai “Raja Bajak Laut”, makhluk terkuat dan paling terkenal yang pernah mengarungi Grand Line. Penangkapan dan eksekusi Roger oleh Pemerintah Dunia membawa perubahan di seluruh dunia.',
            'image' => 'css/images/onepiece.jpeg',
            'video' => 'video/AnimeWorld_One_Piece_1119.mp4',
            'slug' => 'onepiece'
        ]);

        AnimeNonton::create([
            'title' => 'Date A Live',
            'description' => 'Terletak di dunia yang dihancurkan oleh bencana alam karena Spirits, Date a Live mengikuti kisah Shido Itsuka, seorang anak laki-laki yang memiliki kemampuan untuk menyegel roh tersebut dengan mencintai mereka.',
            'image' => 'css/images/date-a-live.jpeg',
            'video' => 'video/AnimeWorld_Date_A_Live_01.mp4',
            'slug' => 'date-a-live'
        ]);

        AnimeNonton::create([
            'title' => 'Majo To Yajuu',
            'description' => 'tentang berawal dari 17 asal muasal bangsa penyihir yang tersebar di berbagai belahan dunia dimana telah ada selama berabad-abad, Mewariskan kemampuan, teknik, dan keterampilan mereka dari generasi ke generasi selanjutnya.',
            'image' => 'css/images/Majo_To_Yajuu.jpg',
            'video' => 'video/AnimeWorld_Majo_To_Yajuu_01.mp4',
            'slug' => 'majo-to-yajuu'
        ]);
    }
}
