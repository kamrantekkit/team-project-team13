<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function getCategory(string $category, ?string $page = "0")
    {
        $productsPages = Product::whereHas('tags', function ($query) use ($category) {
            $query->where('is_category', true)->where('name',$category);
        })->paginate(8, ['*'], 'page', intval($page));
        
        return view("products-test", ["productPages" => $productsPages]);
    }

    public function store(ProductRequest $request)
    {
        return Product::create($request->validated());
    }

    public function show(string $id)
    {
        $product = Product::find($id);
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
