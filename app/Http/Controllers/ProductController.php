<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Tag;
use App\Providers\TagServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

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
        $productsPages = $productsPages->paginate(20, ['*'], 'page', intval($page));

        $tags = Tag::where('is_category', false)->get();
        $filters = array();
        foreach ($tags as $tag) {
                $filters[] = [
                    "id" => $tag->id,
                    "name" => $tag->name,
                    "selected" => in_array($tag->id, $tagFilters)
                ];
        }
//        return response($productsPages);
        return view("products_list", ["productPages" => $productsPages, 'Category' => $category, "tags" => $filters]);
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

        $product->tags()->attach($validated['tags']);
        $product->tags()->attach($validated['category']);


        return view('example');
    }

    public function basket() {
        if (!(session()->has("basket"))) session(["basket"=> []]);
        $basket = session()->get("basket");

        $results = Product::findMany(array_keys($basket));
        $products = array();
        foreach ($results as $product){
            $quantity =  $basket[$product->id];
            $products[] = [
                "name" => $product->name,
                "description" => $product->description,
                "price" => $product->price,
                "image_path" => $product->image_path,
                "quantity" => $quantity
            ];
        }
        Log::info("basket:", $products);
        return view("basket-test", ["products" => $products]);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function basketAdd(Request $request) {
        $id = $request["id"];
        $quantity = intval($request["quantity"]);
        if (!(session()->has("basket"))) session(["basket"=> []]);
        $basket = session()->get("basket");

        if (array_key_exists($id, $basket)) {
            $basket[$id] += $quantity;
            Log::info("increasing");
        } else {
            $basket[$id] = $quantity;
        }

        session(["basket" => $basket]);
        return back();
    }
    public function editor()
    {
        $categories = $this->tagService->getCategories();
        $tags = $this->tagService->getTags();

        return view("product_editor", ["categories" => $categories, "tags" => $tags]);
    }


    public function show(string $id)
    {
        $product = Product::find($id);
        return view('product',  ["product" => $product]);
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
