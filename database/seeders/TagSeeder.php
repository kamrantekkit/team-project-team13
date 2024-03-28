<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder {
    public function run()
    {
        $tags = [
            'Playstation' => 1, // 1
            'Nintendo' => 1, // 2
            'PC' => 1, // 3
            'Xbox' => 1, // 4
            'Accessories' => 1, // 5
            'Action' => 0, // 6
            'Adventure' => 0, // 7
            'Battle Royale' => 0, // 8
            'Co-op' => 0, // 9
            'Fighting' => 0, // 10
            'First-Person Shooter (FPS)' => 0, // 11
            'Carrying Case' => 0, // 12
            'Controller' => 0, // 13
            'Headset' => 0, // 14
            'Keyboard' => 0, // 15
            'Mouse' => 0, // 16
            'Mouse Pad' => 0, // 17
            'LED' => 0, // 18
            'Charger Dock' => 0, // 19
            'Console' => 0, // 20
            'Sports' => 0, // 21
            'VR' => 0, // 22
        ];

        foreach ($tags as $key => $value) {
            Tag::create([
                'name' => $key,
               'is_category' => $value
            ]);
        }

//        // Get some products and tags or use factories to create them
//        $products = Product::all();
//        $categories = Tag::where('is_category', true)->get();
//        $tags = Tag::where('is_category', false)->get();
//
//        // Seed the pivot table
//        foreach ($products as $product) {
//            // Attach tags to products
//            $category = $categories->random();
//            $product->tags()->attach($category);
//            if ($category->id != 5) {
//                $product->tags()->attach($tags->random(7));
//            }
//        }
    }
}
