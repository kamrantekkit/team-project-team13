<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Database\Factories\ReviewFactory;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        // Retrieve all products
        $products = Product::all();
        $users = User::where('is_admin', false)->get();

        // For each product
        foreach ($products as $product) {
            // Create 2 reviews
            for ($i = 0; $i < 2; $i++) {
                Review::factory()->create([
                    'user_id' => $users->random()->id,
                    'product_id' => $product->id
                ]);
            }

            $product->updateAverageRating();
        }
    }
}
