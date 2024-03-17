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
        $basketCost = 0;
        $basketCount = 0;
        foreach ($results as $product){
            $quantity =  $basket[$product->id];
            $basketCost = $quantity * $product->price;
            $basketCount += $quantity;
            $products[] = [
                "id" => $product->id,
                "name" => $product->name,
                "description" => $product->description,
                "price" => $product->price * $quantity,
                "image_path" => $product->image_path,
                "quantity" => $quantity
            ];
        }
        return view("customer-basket", ["products" => $products,"basketCost" => $basketCost,'basketCount' => $basketCount]);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function add(Request $request) {
        $id = $request["id"];
        $quantity = intval($request["quantity"]);
        if ($quantity < 1) $quantity = 1;
        if (!(session()->has("basket"))) session(["basket"=> []]);
        $basket = session()->get("basket");

        if (array_key_exists($id, $basket)) {
            $basket[$id] += $quantity;
            Log::info("increasing");
        } else {
            $basket[$id] = $quantity;
        }

        session(["basket" => $basket]);
        return redirect()->route('product',[$id])->with('addItem','Added Item');
    }


    public function update(Request $request) {
        $request->validate([
            'id' => ['required','numeric'],
            'quantity' => ['numeric', 'min:0']
        ]);

        $id = $request['id'];
        $quantity = intval($request['quantity']);

        if (!session()->has('basket')) return route('basket');
        $basket = session()->get('basket');
        if (!in_array($id, array_keys($basket))) return route('basket');
        if ($quantity == 0) {
            unset($basket[$id]);
        } else {
            $basket[$id] = $quantity;
        }
        session(["basket" => $basket]);
        return redirect()->route('basket');
    }

    public function remove(Request $request) {
        $request->validate([
            'id' => ['required','numeric']
        ]);
        $id = intval($request['id']);
        Log::info($id);
        if (!session()->has('basket')) return redirect()->route('basket');
        $basket = session()->get('basket');
        Log::info($basket);
        if (!in_array($id, array_keys($basket))) return redirect()->route('basket');

        unset($basket[$id]);

        session(["basket" => $basket]);
        return redirect()->route('basket');
    }
}
