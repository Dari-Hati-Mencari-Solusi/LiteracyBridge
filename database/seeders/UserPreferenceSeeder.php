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
      ],
      [
        "name" => "genre",
        "question" => "Genre apa yang paling Anda sukai untuk dibaca?",
        "image_name" => "preference_character2.svg",
      ],
      [
        "name" => "waktu",
        "question" => "Kapan biasanya anda membaca?",
      ],
      [
        "name" => "bahasa",
        "question" => "Bahasa apa yang Anda lebih sukai untuk membaca?",
      ],      
    ];

    foreach ($userPreferences as $userPreference) {
      UserPreference::create($userPreference);
    }
  }
}
