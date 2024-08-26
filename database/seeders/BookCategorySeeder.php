<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{

    public function run(): void
    {
        $bookCategories = [
            [
                "name" => "Cerpen",
                "slug" => "cerpen",                
            ],                        
            [
                "name" => "Fantasi Ilmiah",
                "slug" => "fantasi-ilmiah",                
            ],                        
            [
                "name" => "Sejarah",
                "slug" => "sejarah",                
            ],                        
            [
                "name" => "Budaya",
                "slug" => "budaya",                
            ],                        
            [
                "name" => "Biografi",
                "slug" => "biografi",                
            ],                        
            [
                "name" => "Autobiografi",
                "slug" => "autobiografi",                
            ],                        
            [
                "name" => "Pengembangan Diri",
                "slug" => "pengembangan-diri",                
            ],                        
            [
                "name" => "Sains",
                "slug" => "sains",                
            ],                        
            [
                "name" => "Anak-Anak",
                "slug" => "anak-anak",                
            ],                        
            [
                "name" => "Puisi",
                "slug" => "puisi",                
            ],                        
            [
                "name" => "Pendidikan",
                "slug" => "pendidikan",                
            ],                        
            [
                "name" => "Motivasi dan Insipirasi",
                "slug" => "motivasi-dan-insipirasi",                
            ],                        
            [
                "name" => "Kesehatan",
                "slug" => "kesehatan",                
            ],                        
            [
                "name" => "Hobi",
                "slug" => "hobi",                
            ],                        
            [
                "name" => "Kepemimpinan",
                "slug" => "kepemimpinan",                
            ],                        
            [
                "name" => "Cerita Rakyat",
                "slug" => "cerita-rakyat",                
            ],                        
        ];

        foreach ($bookCategories as $bookCategory) {
            BookCategory::create($bookCategory);
        }
    }
}
