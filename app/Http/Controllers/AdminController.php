<?php

namespace App\Http\Controllers;

use App\Exports\OrderExports;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Stripe\Charge;
use Stripe\Exception\ApiErrorException;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class AdminController extends Controller
{
    public function index()
    {

    }

    public function report() {
        $request = request()->all();
        $validator = Validator::make($request, [
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $startDate = $request['start_date'];
        $endDate = $request['end_date'];

        $export = new OrderExports($startDate, $endDate);
        return Excel::download($export, 'orders.xlsx');

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
