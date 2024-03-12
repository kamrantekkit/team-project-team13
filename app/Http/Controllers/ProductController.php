<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Tag;
use App\Providers\TagServiceProvider;
use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use function PHPUnit\Framework\isEmpty;

class ProductController extends Controller
{
    protected $tagService;

    public function __construct(TagServiceProvider $tagService)
    {
        $this->tagService = $tagService;
    }

    public function index(Request $request, ?string $page = "0")
    {
        $tagFilters = $request->input('tags', []);

        $productsPages = Product::where('archived', false);

        if (!empty($tagFilters)) {
            $productsPages = $productsPages->whereHas('tags', function ($query) use ($tagFilters) {
                $query->whereIn('id', $tagFilters);
            }, '=', count($tagFilters));
        }


        $productsPage = $productsPages->paginate(20, ['*'], 'page', intval($page));

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
        return view("products_list", ["productPages" => $productsPage, "tags" => $filters]);
    }

    public function getCategory(Request $request, string $category, ?string $page = "0")
    {
        $tagFilters = $request->input('tags', []);

        $productsPages = Product::whereHas('tags', function ($query) use ($category, $tagFilters) {
            $query->where('is_category', true)->where('name', $category);
        });

        if (!empty($tagFilters)) {
            $productsPages = $productsPages->whereHas('tags', function ($query) use ($tagFilters) {
                $query->whereIn('id', $tagFilters);
            }, '=', count($tagFilters));
        }


        $productsPage = $productsPages->paginate(20, ['*'], 'page', intval($page));

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
        return view("products_list", ["productPages" => $productsPage, 'Category' => $category, "tags" => $filters]);
    }

    public function search(Request $request, ?string $page = "0")
    {
        $searchTerm = $request->input('query', "");
        $tagFilters = $request->input('tags', []);

        if ($searchTerm == "") {
            return redirect()->route('products');
        }

        $tags = Tag::where('is_category', false)->get();

        $filters = array();
        foreach ($tags as $tag) {
            $filters[] = [
                "id" => $tag->id,
                "name" => $tag->name,
                "selected" => in_array($tag->id, $tagFilters)
            ];
        }

        $tagFilterExpression = implode(' && ', array_map(function ($tag) {
            return "tags:{$tag}";
        }, $tagFilters));

        $searchFilter = "archived:=false && {$tagFilterExpression}";

        $products = Product::search($searchTerm)
            ->options([
                'filter_by' => $searchFilter,
            ])->paginate(15,'page', intval($page));


        return view("products_list", ["productPages" => $products, 'query' => $searchTerm, "tags" => $filters]);
    }

    public function store(ProductRequest $request)
    {
        $validated = $request->validated();

        $img = Image::make($validated['image'])->encode('webp', 100);
//        $path ="products/". time() . ".webp";
//        $path = storage_path('/app/public/products') . "/" . $fileName;
        // 'images' is the directory in the S3 bucket
        $fileName = time() . ".webp"; // Create a filename based on the current timestamp

        $response = Storage::disk('s3')->put("products/" . $fileName, $img->stream(), 'public');


        $product = Product::create([
            "name" => $validated['name'],
            "description" => $validated['description'],
            "price" => $validated['price'],
            "archived" => 0,
            "image_path" => env('AWS_URL') . "/products/" . $fileName,
        ]);

        $product->tags()->attach($validated['tags']);
        $product->tags()->attach($validated['category']);


        return view('dashboard.admin_dashboard');
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
        return view('product', ["product" => $product]);
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
