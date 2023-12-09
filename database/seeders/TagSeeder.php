<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder {
    public function run()
    {
        $tags = [
            'Playstation' => 1,
            'Nintendo' => 1,
            'PC' => 1,
            'Xbox' => 1,
            'Accessories' => 0,
            'Action' => 0,
            'Adventure' => 0,
            'Battle Royale' => 0,
            'Co-op' => 0,
            'Fighting' => 0,
            'First-Person Shooter (FPS)' => 0,
            'Horror' => 0,
            'Massively Multiplayer Online (MMO)' => 0,
            'MOBA' => 0,
            'Music/Rhythm' => 0,
            'Multiplayer' => 0,
            'Open World' => 0,
            'Puzzle' => 0,
            'Racing' => 0,
            'Role-Playing Game (RPG)' => 0,
            'Singleplayer' => 0,
            'Simulation' => 0,
            'Strategy' => 0,
            'Sports' => 0,
            'Survival' => 0,
        ];

        foreach ($tags as $key => $value) {
            Tag::create([
                'name' => $key,
               'is_category' => $value
            ]);
        }

        // Get some products and tags or use factories to create them
        $products = Product::all();
        $category = Tag::where('is_category', true)->get();
        $tags = Tag::where('is_category', false)->get();

        // Seed the pivot table
        foreach ($products as $product) {
            // Attach tags to products
            $product->tags()->attach($category->random());
            $product->tags()->attach($tags->random(3));
        }
    }
}
