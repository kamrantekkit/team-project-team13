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
        $category = Tag::where('is_category', true)->get();
        $tags = Tag::where('is_category', false)->get();

        // Seed the pivot table
        foreach ($products as $product) {
            // Attach tags to products
            $product->tags()->attach($category->random());
            $product->tags()->attach($tags->random());
        }
    }
}
