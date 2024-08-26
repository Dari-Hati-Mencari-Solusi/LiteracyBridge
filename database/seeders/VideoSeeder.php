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
            ["youtube_link" => "HrhvQBdx5rY"],
            ["youtube_link" => "6vbYkN_Hqdg"],
            ["youtube_link" => "dJMUKNi0OkQ"],
            ["youtube_link" => "D8XPuRidZxY"],
            ["youtube_link" => "0gNctcuH0FE"],
        ];

        foreach ($videos as $video) {
            Video::create($video);
        }
    }
}
