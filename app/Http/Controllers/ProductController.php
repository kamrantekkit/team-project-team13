<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Tag;
use App\Providers\TagServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    protected $tagService;

    public function __construct(TagServiceProvider $tagService)
    {
        $this->tagService = $tagService;
    }

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

        $img = Image::make($validated['image'])->encode('webp', 100);
        $fileName = time() . ".webp";
        $path = storage_path('/app/public/products') . "/" . $fileName;
        $img->save($path);

        $product = Product::create([
            "name" => $validated['name'],
            "description" => $validated['description'],
            "price" => $validated['price'],
            "archived" => 0,
            "image_path" => "./storage/products/". $fileName
        ]);

        foreach ($validated['tags'] as $tagId){
            $tag = Tag::find($tagId);
            $product->tags()->attach($tag);
        }

        return view("example");
    }
    public function editor()
    {
        $categories = $this->tagService->getCategories();
        $tags = $this->tagService->getTags();

        return view("products-editor-test", ["categories" => $categories, "tags" => $tags]);
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
