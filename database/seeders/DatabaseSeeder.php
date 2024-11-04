<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            BookSeeder::class,
            UserSeeder::class,
            BookCategorySeeder::class,
            BookCategoryDetailSeeder::class,
            VideoSeeder::class,
            BadgeSeeder::class,
            UserBadgeSeeder::class,
            UserPreferenceSeeder::class,
            UserPreferenceTypeSeeder::class,
            BookmarkSeeder::class      
        ]);
    }
}
