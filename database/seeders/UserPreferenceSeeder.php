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
        "name" => "Asal tahu LiteracyBridge",
        "question" => "Dari mana kamu tahu tentang Literacy Bridge?",        
      ],
      [
        "name" => "Genre",
        "question" => "Genre apa yang paling Anda sukai untuk dibaca?",
        "image_name" => "preference_character2.svg",
      ],
      [
        "name" => "Waktu membaca",
        "question" => "Kapan biasanya anda membaca?",
      ],
      [
        "name" => "Bahasa",
        "question" => "Bahasa apa yang Anda lebih sukai untuk membaca?",
      ],      
    ];

    foreach ($userPreferences as $userPreference) {
      UserPreference::create($userPreference);
    }
  }
}
