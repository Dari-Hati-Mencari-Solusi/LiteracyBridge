<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videos = [
            [
                "title" => "Alasan Sebenarnya Orang Indonesia Malas Baca Buku",
                "youtube_link" => "HrhvQBdx5rY",
                "creator" => "Kok Bisa"
            ],
            [
                "title" => "Cara Mengembangkan Kemampuan Berpikir Kritis (Motivasi Belajar dan Menulis)",
                "youtube_link" => "6vbYkN_Hqdg",
                "creator" => "Satu Persen - Indonesian Life School"
            ],
            [
                "title" => "Cara Memiliki Wawasan dan Pengetahuan yang Luas",
                "youtube_link" => "dJMUKNi0OkQ",
                "creator" => "Salam Insipirasi"
            ],
            [
                "title" => "Cara Meningkatkan Daya Ingat untuk Orang Pelupa (Penyebab Pelupa)",
                "youtube_link" => "D8XPuRidZxY",
                "creator" => "Satu Persen - Indonesian Life School"
            ],
            [
                "title" => "Puasa Dopamin atau Hiburan - reset otak, hidup kembali, kecanduan gadget",
                "youtube_link" => "0gNctcuH0FE",
                "creator" => "Akbar Abi"
            ],
        ];

        foreach ($videos as $video) {
            Video::create($video);
        }
    }
}
