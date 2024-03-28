<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition(): array
    {
        return [
            'description' => $this->faker->text(),
            'rating' => $this->faker->numberBetween(1,5)
        ];
    }
}
