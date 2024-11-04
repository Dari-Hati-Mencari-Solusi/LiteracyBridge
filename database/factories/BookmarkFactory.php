<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookmark>
 */
class BookmarkFactory extends Factory
{
    protected $usedCombinations = [];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        do {
            $userId = mt_rand(1, 2);
            $bookId = mt_rand(1, 6);
            $combination = $userId . '-' . $bookId;
        } while (in_array($combination, $this->usedCombinations));

        $this->usedCombinations[] = $combination;

        return [
            "user_id" => $userId,
            "book_id" => $bookId
        ];
    }
}
