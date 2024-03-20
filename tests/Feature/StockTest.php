<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StockTest extends TestCase
{
    public function test_stock_view_can_be_rendered()
    {
        $user = User::factory()->create(['is_admin' => 1]);
        $response = $this->actingAs($user)->get("/stock");

        $response->assertStatus(200);
        $response->assertViewHas('records');
    }

    public function test_stock_is_created_when_product_is_created()
    {


        // Assuming you have a Product factory
        $product = Product::factory()->create();

        // Assert a stock record was created for the new product
        $this->assertDatabaseHas('stocks', [
            'product_id' => $product->id,
        ]);
    }

    public function test_stock_can_be_updated()
    {
        $user = User::factory()->create(['is_admin' => 1]);
        // Assuming you have a Product factory
        $product = Product::factory()->create();


        $response = $this->actingAs($user)->patch("/stock/update", [
            'update_stock' => true,
            'product_id' => $product->id,
            'new_stock' => 10,
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('stocks', [
            'product_id' => $product->id,
            'quantity' => 10,
        ]);
    }



}
