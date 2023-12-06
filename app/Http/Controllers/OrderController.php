<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Providers\TagServiceProvider;
use Illuminate\Http\Request;

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

    public function process(OrderRequest $request)
    {
        $validated = $request->validated();
        \Log::info("Passed Validation");
        $userID = auth()->id();
        if (!(session()->has('basket'))) {
            abort(400, 'No basket items');
        }


        $basket = session()->get('basket');
        $results = Product::findMany(array_keys($basket), ['id','name','description','price','price']);
        $totalOrderCost = 0.0;
        $products = array();
        foreach ($results as $product) {
            $quantity = $basket[$product->id];
            $totalCost = $product->price * $quantity;
            $totalOrderCost += $totalCost;
            $products[$product->id] = ['quantity' => $quantity];
        }

        $order = Order::create([
            "user_id" => $userID,
            "payment_id" => "1",
            "first_line_address" => $validated["first_line_address"],
            "second_line_address" => $validated["second_line_address"],
            "city" => $validated["city"],
            "postcode" => $validated["postcode"],
            "price" => $totalOrderCost
        ]);

        $order->products()->attach($products);

        return "Order: ".$order->id;
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
