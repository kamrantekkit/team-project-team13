<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::take(8)->get();

        $productRows = array_chunk($products->toArray(), 4);

        return view("products-test", ["productRows" => $productRows]);
    }

    public function store(ProductRequest $request)
    {
        return Product::create($request->validated());
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return $product;
    }

    public function archive(Product $product)
    {
        $product->archived = true;

        return response()->json();
    }

    public function unArchive(Product $product)
    {
        $product->archived = false;

        return response()->json();
    }
}
