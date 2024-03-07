<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
class CustomerManagementController extends Controller
{
    public function index(?string $page = "0")
    {
        $customers = User::paginate(8, ['*'], 'page', intval($page));


        return view('admin.customer_management', ["customers" => $customers]);
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

    public function search(Request $request)
    {
        $searchTerm = $request->input('search_term');

        $user = User::search($searchTerm)->get();

        return json_encode($user);
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
