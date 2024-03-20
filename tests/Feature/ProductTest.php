<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Database\Seeders\TagSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use LaravelIdea\Helper\App\Models\_IH_Product_C;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;



    public function testProductListing()
    {
        $products = Product::factory()->count(10)->create();

        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertViewIs('products_list');

        $viewData = $response->viewData('productPages');


        $this->assertCount($products->count(), $viewData);

        foreach ($products as $product) {
            $this->assertContains($product->name, $viewData->pluck('name'));
        }
    }

    public function testTagFilter()
    {
        // Create some products with different tags
        $tag1 = Tag::factory()->create();
        $tag2 = Tag::factory()->create();

        $productsWithTag1 = Product::factory()->count(5)->create()->each(function ($product) use ($tag1) {
            $product->tags()->attach($tag1);
        });

        $productsWithTag2 = Product::factory()->count(5)->create()->each(function ($product) use ($tag2) {
            $product->tags()->attach($tag2);
        });

        // Send a GET request with a tag filter
        $response = $this->get('/products?tags[]=' . $tag1->id);

        // Assert the response status is 200
        $response->assertStatus(200);

        // Assert the response view is 'products_list'
        $response->assertViewIs('products_list');

        // Retrieve the products from the response view data
        $viewData = $response->viewData('productPages');

        // Assert the count of the products in the view data matches the count of the products with the filtered tag
        $this->assertCount($productsWithTag1->count(), $viewData);

        // Loop through the products in the view data and assert that each one has the filtered tag
        foreach ($viewData as $productData) {
            $this->assertContains($tag1->id, $productData->tags->pluck('id'));
        }
    }


    public function testSearchEngine()
    {
        // Create a product with a specific name
        $productName = 'UniqueProductName';
        $product = Product::factory()->create(['name' => $productName]);

        // Send a GET request with the specific product name as search term
        $response = $this->get('/products?query=' . $productName);

        // Assert the response status is 200
        $response->assertStatus(200);

        // Assert the response view is 'products_list'
        $response->assertViewIs('products_list');

        // Retrieve the products from the response view data
        $viewData = $response->viewData('productPages');

        // Assert the product with the specific name is in the view data
        $this->assertContains($productName, $viewData->pluck('name'));
    }

    public function testProductRetrieval()
    {
        $product = Product::factory()->create();

        $response = $this->get('/product/' . $product->id);

        $response->assertStatus(200);
        $response->assertSee($product->name);
    }

    public function testProductArchive()
    {
        $user = User::factory()->create();
        $user->is_admin = 1;
        $user->save();

        $product = Product::factory()->create();

        $response = $this->actingAs($user)->put('/admin/product/archive/' . $product->id);

        $response->assertStatus(202);
        $this->assertDatabaseHas('products', ['id' => $product->id, 'archived' => 1]);

        $product->delete();
    }

    public function testProductCreation()
    {
        $category = Tag::factory()->create(['is_category' => 1]);
        $tags = Tag::factory()->count(3)->create(['is_category' => 0]);

        $user = User::factory()->create(['is_admin' => 1]);

        $disk = Storage::fake('s3');

        $productData = [
            'name' => 'Test Product',
            'description' => 'This is a test product',
            'price' => 10.00,
            'image' => UploadedFile::fake()->image('test.jpg'), // Create a fake image
            'category' => $category->id,
            'tags' => $tags->pluck('id')->toArray(),
        ];


        $fileName = '';

        Storage::shouldReceive('disk->put')
            ->once()
            ->andReturnUsing(function ($path, $contents, $visibility) use (&$fileName, $disk) {
                // Capture the generated filename
                $fileName = $path;

                // Call the actual implementation of the 'put' method
                return $disk->put($path, $contents, $visibility);
            });

        $response = $this->actingAs($user)->post('/admin/product/create', $productData);

        $response->assertStatus(202);
        $this->assertDatabaseHas('products', ['name' => $productData['name']]);


        // Call assertExists after the file has been created and stored
        $disk->assertExists($fileName);
    }


}
