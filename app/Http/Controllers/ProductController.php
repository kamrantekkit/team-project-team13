<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function getCategory(Request $request, string $category, ?string $page = "0")
    {
        $tagFilters = $request->input('tags', []);

        $productsPages = Product::whereHas('tags', function ($query) use ($category, $tagFilters) {
            $query->where('is_category', true)->where('name', $category);
        });

        if (!empty($tagFilters)) {
            if (!empty($tagFilters)) {
                $productsPages = $productsPages->whereHas('tags', function ($query) use ($tagFilters) {
                    $query->whereIn('id', $tagFilters);
                }, '=', count($tagFilters));
            }
        }

        Log::info($productsPages->toSql());
        $productsPages = $productsPages->paginate(8, ['*'], 'page', intval($page));

//        return response($productsPages);
        return view("products-test", ["productPages" => $productsPages, "Category" => $category]);
    }

    public function store(ProductRequest $request)
    {
        $validated = $request->validated();
        Log::info($validated);
        $img = Image::make($validated['image'])->encode('webp', 100);
        $fileName = time() . ".webp";
        $path = storage_path('/app/public/products') . "/" . $fileName;
        $img->save($path);


        Product::create([
            "name" => $validated['name'],
            "description" => $validated['description'],
            "price" => $validated['price'],
            "archived" => 0,
            "image_path" => "./storage/products/". $fileName
        ]);
        return "ayaya";
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
