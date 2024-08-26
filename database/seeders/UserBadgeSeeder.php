<?php

namespace Database\Seeders;

use App\Models\UserBadge;
use Illuminate\Database\Seeder;

class UserBadgeSeeder extends Seeder
{    
    public function run(): void
    {        
        $userBadges = [
            [
                "user_id" => 1,
                "badge_id" => 1
            ],
            [
                "user_id" => 1,
                "badge_id" => 1
            ],
            [
                "user_id" => 1,
                "badge_id" => 8
            ],
            [
                "user_id" => 2,
                "badge_id" => 1
            ],
            [
                "user_id" => 2,
                "badge_id" => 4
            ],
        ];

        foreach ($userBadges as $userBadge) {
            UserBadge::create($userBadge);
        }
    }
}
