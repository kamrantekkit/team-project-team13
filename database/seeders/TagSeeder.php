<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder {
    public function run()
    {
        // Get some products and tags or use factories to create them
        $products = Product::all();
        $tags = Tag::all();

        // Seed the pivot table
        foreach ($products as $product) {
            // Attach tags to products
            $product->tags()->attach($tags->random());
        }
    }
}
