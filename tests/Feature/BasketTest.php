<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasketTest extends TestCase
{
    public function test_basket_view_can_be_rendered()
    {
        // Add a product to the session
        session(['basket' => [1 => 1]]);

        $response = $this->get(route('basket'));

        $response->assertStatus(200);
        $response->assertViewHas('products');
        $response->assertViewHas('basketCost');
        $response->assertViewHas('basketCount');
    }


    public function test_product_can_be_added_to_basket()
    {
        $response = $this->post(route('basket.add'), [
            'id' => 1,
            'quantity' => 1,
        ]);

        $response->assertRedirect(route('product', [1]));
        $this->assertEquals([1 => 1], session('basket'));
    }

    public function test_product_can_be_removed_from_basket()
    {
        // Add a product to the session
        session(['basket' => [1 => 1]]);

        $response = $this->delete(route('basket.remove'), [
            'id' => 1,
        ]);

        $response->assertRedirect(route('basket'));
        $this->assertEquals([], session('basket'));
    }
}
