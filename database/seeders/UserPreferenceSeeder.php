<?php

namespace Database\Seeders;

use App\Models\UserPreference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPreferenceSeeder extends Seeder
{
  public function run(): void {
    $userPreferences = [
      [
        "name" => "asal",
        "question" => "Dari mana kamu tahu tentang Literacy Bridge?", 
        "link" =>"https://lottie.host/embed/f78b69c6-fb81-4ddd-88e6-ef7c8f626c7d/3xH7pJRO8a.json",       
      ],
      [
        "name" => "genre",
        "question" => "Genre apa yang paling Anda sukai untuk dibaca?",
        "link" => "https://lottie.host/embed/79f2e8fb-c975-4c55-9446-27c8b5c5b3d9/kpY4S0bJ8l.json",
      ],
      [
        "name" => "waktu",
        "question" => "Kapan biasanya anda membaca?",
        "link" =>"https://lottie.host/embed/f78b69c6-fb81-4ddd-88e6-ef7c8f626c7d/3xH7pJRO8a.json",
      ],
      [
        "name" => "bahasa",
        "question" => "Bahasa apa yang Anda lebih sukai untuk membaca?",
        "link" =>"https://lottie.host/embed/79f2e8fb-c975-4c55-9446-27c8b5c5b3d9/kpY4S0bJ8l.json",
      ],      
    ];

    foreach ($userPreferences as $userPreference) {
      UserPreference::create($userPreference);
    }
  }
}
