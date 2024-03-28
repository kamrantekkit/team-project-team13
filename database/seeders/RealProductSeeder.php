<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Faker\Provider\Address;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class RealProductSeeder extends Seeder
{
    public function run(): void
    {
        // Create a Faker instance
        $faker = Factory::create();

        // Read the JSON file
        $json = file_get_contents('ProductData/product.json');

        // Decode the JSON data
        $data = json_decode($json, true);

        // Loop through the data
        foreach ($data as $item) {
            // Read the image file locally
            $img = Image::make('ProductData/Images/' . $item['id'] . '.jpg')->resize('500',500)->encode('webp', 100);

            $fileName = $item['id'] . time() . ".webp"; // Create a filename based on the id

            // Save the image to your S3 bucket
            $response = Storage::disk('s3')->put("products/" . $fileName, (string) $img, 'public');

            // Create a new product
            $product = Product::create([
                "name" => $item['name'] ,
                "description" => $item['description'],
                "price" => $faker->randomFloat(2, 1, 1000),
                "archived" => 0,
                "image_path" => Storage::disk('s3')->url("products/" . $fileName), // Get the URL of the image from the S3 bucket
            ]);

            $product->tags()->attach($item['tags']); // Attach the tags to the product

        }
    }
}
