<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Stripe\Charge;
use Stripe\Exception\ApiErrorException;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class AdminController extends Controller
{
    public function index()
    {

    }

    /**
     * @throws ApiErrorException
     */
    public function viewOrder($id)
    {
        $order = Order::find($id);

        if ($order == null) {
            return redirect()->route('admin.dashboard');
        }

        Stripe::setApiKey(env('STRIPE_SECRET'));




        $address = [];
        try {
            $paymentIntent = Charge::retrieve($order->payment_id);
            $address = $paymentIntent->billing_details->address;
        } catch (\Exception $e) {

        }


        return view('admin.order_view', ['order' => $order, 'page' => 'home', 'address' => $address]);
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
