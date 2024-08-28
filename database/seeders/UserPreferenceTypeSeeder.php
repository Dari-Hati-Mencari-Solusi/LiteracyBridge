<?php

namespace Database\Seeders;

use App\Models\UserPreferenceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPreferenceTypeSeeder extends Seeder
{  
  public function run(): void
  {
    $userPreferenceTypes = [
      [
        "preference_id" => 1,
        "name" => "Instagram",
        "icon_name" => "instagram.svg"
      ],
      [
        "preference_id" => 1,
        "name" => "Pencarian Google",
        "icon_name" => "google.svg"
      ],
      [
        "preference_id" => 1,
        "name" => "LinkedIn",
        "icon_name" => "linkedin.svg"
      ],
      [
        "preference_id" => 1,
        "name" => "Tiktok",
        "icon_name" => "tiktok.svg"
      ],
      [
        "preference_id" => 1,
        "name" => "Teman",
        "icon_name" => "friend.svg"
      ],
      [
        "preference_id" => 1,
        "name" => "Lainnya",
        "icon_name" => "other.svg"
      ],
      [
        "preference_id" => 2,
        "name" => "Literasi"
      ],
      [
        "preference_id" => 2,
        "name" => "Fantasi"
      ],
      [
        "preference_id" => 2,
        "name" => "Ilmiah"
      ],
      [
        "preference_id" => 2,
        "name" => "Sejarah"
      ],
      [
        "preference_id" => 2,
        "name" => "Budaya"
      ],
      [
        "preference_id" => 2,
        "name" => "Biografi"
      ],
      [
        "preference_id" => 2,
        "name" => "Autobigorafi"
      ],
      [
        "preference_id" => 2,
        "name" => "Pengembangan Diri"
      ],
      [
        "preference_id" => 2,
        "name" => "Sains"
      ],
      [
        "preference_id" => 2,
        "name" => "Puisi"
      ],
      [
        "preference_id" => 2,
        "name" => "Pendidikan"
      ],
      [
        "preference_id" => 2,
        "name" => "Motivasi"
      ],
      [
        "preference_id" => 2,
        "name" => "Inspirasi"
      ],

      [
        "preference_id" => 3,
        "name" => "Pagi",
        "icon_name" => "pagi.svg"
      ],
      [
        "preference_id" => 3,
        "name" => "Siang",
        "icon_name" => "siang.svg"
      ],
      [
        "preference_id" => 3,
        "name" => "Sore",
        "icon_name" => "sore.svg"
      ],
      [
        "preference_id" => 3,
        "name" => "Malam",
        "icon_name" => "malam.svg"
      ],
      [
        "preference_id" => 3,
        "name" => "Dini hari",
        "icon_name" => "dini.svg"
      ],
      [
        "preference_id" => 3,
        "name" => "Sepanjang hari",
        "icon_name" => "sepanjang.svg"
      ],

      [
        "preference_id" => 4,
        "name" => "Indonesia",
        "icon_name" => "indonesia.svg"
      ],
      [
        "preference_id" => 4,
        "name" => "Jepang",
        "icon_name" => "jepang.svg"
      ],
      [
        "preference_id" => 4,
        "name" => "Inggris",
        "icon_name" => "inggris.svg"
      ],
      [
        "preference_id" => 4,
        "name" => "Korea Selatan",
        "icon_name" => "korea-selatan.svg"
      ],
      [
        "preference_id" => 4,
        "name" => "Rusia",
        "icon_name" => "rusia.svg"
      ],
      [
        "preference_id" => 4,
        "name" => "Cina",
        "icon_name" => "cina.svg"
      ],
    ];

    foreach($userPreferenceTypes as $userPreferenceType){
      UserPreferenceType::create($userPreferenceType);
    }
  }
}
