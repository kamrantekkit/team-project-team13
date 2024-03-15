<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
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

    public function adminDashboard(?string $page = "0")
    {
        $pages = Order::paginate(10, ['*'], 'page', intval($page));
        $totalCost = Order::where('created_at', '>=', Carbon::now()->subDays(7))
            ->sum('price');

        $ordersData = [];
        foreach ($pages as $order) {
            $ordersData[] = [
                "id" => $order->id,
                'name' => $order->user->name,
                'email' => $order->user->email,
                "total" => $order->price,
                "order_day" => Carbon::parse($order->created_at)->format('d/m/Y'),
                'order_time' => Carbon::parse($order->created_at)->format('H:i'),
            ];
        }

        return view('dashboard.admin_dashboard', ["totalRevenue" => $totalCost,"orders" => $ordersData, "pages" => $pages]);
    }
}
