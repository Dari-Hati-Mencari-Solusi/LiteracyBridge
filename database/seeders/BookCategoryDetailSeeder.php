<?php

namespace Database\Seeders;

use App\Models\BookCategoryDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookCategoryDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookCategoryDetails = [
            [
                "book_id" => 1,
                "book_category_id" => 1
            ],
            [
                "book_id" => 2,
                "book_category_id" => 7
            ],
            [
                "book_id" => 3,
                "book_category_id" => 7
            ],
            [
                "book_id" => 4,
                "book_category_id" => 8
            ],
            [
                "book_id" => 5,
                "book_category_id" => 13
            ],
        ];

        foreach ($bookCategoryDetails as $bookCategoryDetail) {
            BookCategoryDetail::create($bookCategoryDetail);
        }
    }
}
