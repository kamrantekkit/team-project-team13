<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::where('user_id', auth()->id())->latest()->take(5)->get();
        $pastOrders = array();
        foreach ($orders as $order) {
            $orderDetails = [
                "id" => $order->id,
                "products" => [],
                "totalCost" => $order->price,
                "date" => $order->created_at
            ];
            foreach ($order->products as $product) {
                $quantity = $product->pivot->quantity;
                $orderDetails['products'][] = [
                    "name" => $product->name,
                    "description" => $product->description,
                    "quantity" => $quantity,
                    "image_path" => $product->image_path,
                    "price" => $product->price * $quantity
                ];
            }
            $pastOrders[] = $orderDetails;
        }
        return view("dashboard.dashboard", ["orders" => $pastOrders]);
    }

    public function settings()
    {
        return view('dashboard.user-settings');
    }

    public function adminDashboard()
    {
        return view('dashboard.admin_dashboard');
    }
}
