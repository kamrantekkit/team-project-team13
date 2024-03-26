<?php

namespace App\Http\Controllers;

use App\Models\Order;

class AdminController extends Controller
{
    public function index()
    {

    }

    public function viewOrder($id)
    {
        $order = Order::find($id);

        if ($order == null) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.order_view', ['order' => $order, 'page' => 'home']);
    }

    public function processOrder($id)
    {
        $order = Order::find($id);

        if ($order == null) {
            return redirect()->route('admin.dashboard');
        }

        $order->status = 'completed';
        $order->save();

        return redirect()->route('admin.orders.view', ['id' => $order->id]);
    }

    public function cancelOrder($id)
    {
        $order = Order::find($id);

        if ($order == null) {
            return redirect()->route('admin.dashboard');
        }

        $order->status = 'cancelled';
        $order->save();

        return redirect()->route('admin.orders.view', ['id' => $order->id]);
    }
}
