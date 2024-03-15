<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $orders = Order::factory(10)->create();

        $products = Product::all();

        foreach ($orders as $order) {
            // Get random products
            $orderProducts = $products->random(rand(1, 3))->pluck('id')->toArray();

            // Generate random quantities for each product
            $quantities = array_map(function() {
                return ['quantity' => rand(1, 5)]; // Change the range as per your requirements
            }, array_fill(0, count($orderProducts), null));

            // Combine products and quantities into an associative array
            $productsWithQuantities = array_combine($orderProducts, $quantities);

            // Attach products with quantities to the order
            $order->products()->attach($productsWithQuantities);
        }
    }
}
