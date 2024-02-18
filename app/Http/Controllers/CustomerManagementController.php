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


}
