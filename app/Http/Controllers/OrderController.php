<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use App\Providers\TagServiceProvider;
use Illuminate\Http\Request;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use function Laravel\Prompts\search;

class OrderController extends Controller
{

    public function __construct(TagServiceProvider $tagService)
    {
        $this->tagService = $tagService;
    }
    public function index()
    {
        return Order::all();
    }

    public function checkout() {
        $basketProducts = $this->getBasketProducts();
        if ($basketProducts == null) return redirect()->route("basket");

        Stripe::setApiKey(env('STRIPE_SECRET'));
        $products = $basketProducts['products'];

        $productIds = [];
        foreach ($products as $product) {
            $productIds[$product['id']] = ['quantity' => $product['quantity']];
        }
        // Create a PaymentIntent
        $intent = PaymentIntent::create([
            'amount' => $basketProducts['totalCost'] * 100, // Amount in cents (e.g., $10.00)
            'currency' => 'gbp',
            'metadata' => [
                'products' => json_encode($productIds)
            ]
            // Other payment intent parameters...
        ]);

        return view("checkout",['clientSecret' => $intent->client_secret,"basket" => $basketProducts['products'],'totalCost' => $basketProducts['totalCost']]);
    }

    public function confirm(Request $request){
//        if (session()->has("basket")) {
//            session(["basket" => []]);
//        }
        return view("order-confirmation");
    }

    public function getBasketProducts() {
        if (!(session()->has("basket"))) return null;
        $basket = session()->get("basket");
        if (empty($basket) == true) return null;
        $results = Product::findMany(array_keys($basket));
        if ($results->isEmpty()) return null;

        $totalOrderCost = 0.0;
        $products = array();
        foreach ($results as $product) {
            $quantity = $basket[$product->id];
            $totalCost = $product->price * $quantity;
            $totalOrderCost += $totalCost;
            $products[] = [
                "id" => $product->id,
                "name" => $product->name,
                "description" => $product->description,
                "price" => $product->price,
                "image_path" => $product->image_path,
                "quantity" => $quantity
            ];
        }

        return array("products" => $products, "totalCost" => $totalOrderCost);
    }

    public function show(Order $order)
    {
        return $order;
    }

    public function update(Request $request, Order $order)
    {
        return $order;
    }

}
