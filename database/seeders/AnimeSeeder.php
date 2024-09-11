<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anime;

class AnimeSeeder extends Seeder
{
   
    public function run()
    {
        Anime::create([
            'title' => 'High Card',
            'description' => ' menceritakan tentang sekelompok pemuda yang masuk ke dunia bawah tanah permainan kartu berisiko tinggi. Dengan kemampuan unik dan strategi yang tajam, mereka menghadapi tantangan mematikan dan lawan-lawan kuat sambil mencari naik peringkat dalam hierarki dunia bawah tanah perjudian. Dengan rahasia gelap, pengkhianatan, dan plot twist tak terduga, High Card menawarkan roller coaster emosi dan bahaya yang mendebarkan.',
            'image' => 'css/images/anime-1.jpg'
        ]);
    
        Anime::create([
            'title' => 'Charllote',
            'description' => 'Ini adalah anime tentang remaja yang memiliki kekuatan khusus dengan cerita penuh intrik dan konflik',
            'image' => 'css/images/anime-2.jpeg'
        ]);
    
        Anime::create([
            'title' => 'Horimya',
            'description' => 'Anime tentang persahabatan dan cinta yang berkembang antara dua orang remaja dengan latar belakang berbeda.',
            'image' => 'css/images/anime-3.jpeg'
        ]);

        Anime::create([
            'title' => 'One Piece',
            'description' => 'Anime One Piece mengisahkan Gol D. Roger yang dikenal sebagai “Raja Bajak Laut”, makhluk terkuat dan paling terkenal yang pernah mengarungi Grand Line. Penangkapan dan eksekusi Roger oleh Pemerintah Dunia membawa perubahan di seluruh dunia.',
            'image' => 'css/images/one piece.jpeg'
        ]);

        Anime::create([
            'title' => 'Shigatshu wa kimi no uso',
            'description' => 'seorang anak yang berbakat dalam bermain piano dan selalu tampil mendominasi dalam berbagai kompetisi, sehingga menjadikannya terkenal di antara para musikus cilik.',
            'image' => 'css/images/your_april.jpeg'
        ]);

        Anime::create([
            'title' => 're zero kara hajimeru iseka',
            'description' => 'mengisahkan Subaru yang terbangun di dunia fantasi dan dipukuli oleh sekelompok preman. Dia diselamatkan oleh Stella yang sedang mencari lambangnya. Subaru pun berniat membantunya.',
            'image' => 'css/images/rezero.jpeg'
        ]);
    }

    
}
