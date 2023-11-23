<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'archived' => $this->faker->boolean(),
            'image_path' => "/storage/products/test.svg",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
