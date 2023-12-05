<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return Order::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'integer'],
            'price' => ['required', 'integer'],
            'first_line_address' => ['required'],
            'second_line_address' => ['required'],
            'city' => ['required'],
            'postcode' => ['required'],
            'payment_id' => ['required'],
        ]);

        return Order::create($request->validated());
    }

    public function show(Order $order)
    {
        return $order;
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'user_id' => ['required', 'integer'],
            'price' => ['required', 'integer'],
            'first_line_address' => ['required'],
            'second_line_address' => ['required'],
            'city' => ['required'],
            'postcode' => ['required'],
            'payment_id' => ['required'],
        ]);

        $order->update($request->validated());

        return $order;
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return response()->json();
    }
}
