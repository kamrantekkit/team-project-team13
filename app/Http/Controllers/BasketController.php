<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Providers\TagServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class BasketController extends Controller
{

    protected $tagService;

    public function __construct(TagServiceProvider $tagService)
    {
        $this->tagService = $tagService;
    }
    public function index()
    {

    }

    public function basket() {
        if (!(session()->has("basket"))) session(["basket"=> []]);
        $basket = session()->get("basket");

        $results = Product::findMany(array_keys($basket));
        $products = array();
        foreach ($results as $product){
            $quantity =  $basket[$product->id];
            $products[] = [
                "id" => $product->id,
                "name" => $product->name,
                "description" => $product->description,
                "price" => $product->price,
                "image_path" => $product->image_path,
                "quantity" => $quantity
            ];
        }
        return view("customer-basket", ["products" => $products]);
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
        return redirect()->route('product',[$id])->with("passwordStatus", "Password changed successfully!")->with('addItem','Added Item');
    }
}
