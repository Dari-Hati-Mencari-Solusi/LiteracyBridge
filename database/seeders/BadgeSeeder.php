<?php

namespace Database\Seeders;

use App\Models\Badge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BadgeSeeder extends Seeder
{    
    public function run(): void
    {
        $badges = [
            [
                "name" => "Collectors",
                "rangking" => 1,
                "icon_name" => "collectos.webp"
            ],
            [
                "name" => "Masters",
                "rangking" => 2,
                "icon_name" => "masters.webp"
            ],
            [
                "name" => "Sprinters",
                "rangking" => 3,
                "icon_name" => "sprinters.webp"
            ],
            [
                "name" => "Champions",
                "rangking" => 4,
                "icon_name" => "champions.webp"
            ],
            [
                "name" => "Seekers",
                "rangking" => 5,
                "icon_name" => "seekers.webp"
            ],
            [
                "name" => "Marathoners",
                "rangking" => 6,
                "icon_name" => "marathoners.webp"
            ],
            [
                "name" => "PageTurners",
                "rangking" => 7,
                "icon_name" => "pageturners.webp"
            ],
            [
                "name" => "Bookworms",
                "rangking" => 8,
                "icon_name" => "bookworms.webp"
            ],
        ];

        foreach ($badges as $badge) {
            Badge::create($badge);
        }
    }
}
