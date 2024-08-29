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
                "name" => "cerpen",
                "slug" => "cerpen",                
            ],                        
            [
                "name" => "fantasi ilmiah",
                "slug" => "fantasi-ilmiah",                
            ],                        
            [
                "name" => "sejarah",
                "slug" => "sejarah",                
            ],                        
            [
                "name" => "budaya",
                "slug" => "budaya",                
            ],                        
            [
                "name" => "biografi",
                "slug" => "biografi",                
            ],                        
            [
                "name" => "autobiografi",
                "slug" => "autobiografi",                
            ],                        
            [
                "name" => "pengembangan Diri",
                "slug" => "pengembangan-diri",                
            ],                        
            [
                "name" => "sains",
                "slug" => "sains",                
            ],                        
            [
                "name" => "anak-Anak",
                "slug" => "anak-anak",                
            ],                        
            [
                "name" => "puisi",
                "slug" => "puisi",                
            ],                        
            [
                "name" => "pendidikan",
                "slug" => "pendidikan",                
            ],                        
            [
                "name" => "motivasi dan Insipirasi",
                "slug" => "motivasi-dan-insipirasi",                
            ],                        
            [
                "name" => "kesehatan",
                "slug" => "kesehatan",                
            ],                        
            [
                "name" => "hobi",
                "slug" => "hobi",                
            ],                        
            [
                "name" => "kepemimpinan",
                "slug" => "kepemimpinan",                
            ],                        
            [
                "name" => "cerita Rakyat",
                "slug" => "cerita-rakyat",                
            ],                        
            [
                "name" => "literasi",
                "slug" => "literasi",                
            ],                        
        ];

        foreach ($bookCategories as $bookCategory) {
            BookCategory::create($bookCategory);
        }
    }
}
