<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CustomerManagementController extends Controller
{
    public function index(?string $page = "0")
    {
        $customers = User::orderBy('name', 'asc')->paginate(15, ['*'], 'page', intval($page));

        return view('admin.customer_management', ["customers" => $customers, "page" => "customers"]);
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

    public function search(Request $request, ?string $page = "0")
    {
        $searchTerm = $request->input('query');

        $customers = User::search($searchTerm)->paginate(15,'page', intval($page));

        return view('admin.customer_management', ["customers" => $customers, "page" => "customers"]);
    }

    public function update(UserRequest $request)
    {
        $request = $request->validated();
        $user = User::find($request['customer_id']);
        $user->update([
            "name" => $request['first_name'] . " " . $request['last_name'],
            "email" => $request['email']
        ]);

        return redirect()->route('admin.customers-management');
    }

}
