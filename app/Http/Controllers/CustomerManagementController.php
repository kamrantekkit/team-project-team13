<?php

namespace App\Http\Controllers;

use App\Models\User;

class CustomerManagementController extends Controller
{
    public function index()
    {
        $customers = [];
        foreach (User::all() as $user) {
           $customers[] = [
               "id" => $user->id,
               "name" => $user->name,
               "email" => $user->email
           ];
        }

        return json_encode($customers);
    }

    public function getCustomerOrders($customerId)
    {
        $customer = User::find($customerId);
        $orders = [];
        foreach ($customer->orders as $order) {
            $orders[] = [
                "id" => $order->id,
                "total" => $order->total,
                "created_at" => $order->created_at
            ];
        }

        return json_encode($orders);
    }

}
