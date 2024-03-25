<?php

namespace App\Http\Controllers;

use App\Models\Product;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->take(4)->get();
        return view('homepage', ['products' => $products]);
    }

}
