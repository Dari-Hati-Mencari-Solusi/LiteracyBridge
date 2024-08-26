<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => "Kang Rantau",
                'email' => "kangrantau@gmail.com",
                "username" => "kangrantau123",                
                'password' => bcrypt("12345"),
                "phone_number" => "082123456789",
                "addresse" => "Merauke, Papua",                
                "point" => 12.2,                                   
            ],
            [
                'name' => "Yogi Lampung",
                'email' => "yogilampung@gmail.com",
                "username" => "lampungindonesia",                
                'password' => bcrypt("09876"),
                "phone_number" => "082123456789",
                "addresse" => "Bandar Abung, Lampung",                
                "point" => 0,                                   
            ],
            [
                'name' => "Super Admnin",
                'email' => "superadmin@gmail.com",
                "username" => "superadmin123",                
                'password' => bcrypt("qwerty"),
                "phone_number" => "0832345678765",
                "addresse" => "Sleman, Yogyakarta",
                "role" => "admin",
                "point" => 12.2,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
