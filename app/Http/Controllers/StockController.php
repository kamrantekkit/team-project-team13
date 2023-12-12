<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockRequest;
use App\Mail\StockNotify;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Support\Facades\Mail;

class StockController extends Controller
{
    public function index()
    {
        // Simulating data retrieval. Replace this with your actual logic.
        $records =  Product::first(10)->get(); // Fetch all records

        return view("stock-view", ['records' => $records]);
    }



    public function update(Request $request)
    {

        if ($request->has('update_stock')) {
            // Process the form data here
            $productId = $request->input('product_id');

            $newStockAmount = $request->input('new_stock');

            // Retrieve the stock associated with the product
            $stock = Stock::where('product_id', $productId)->first();

            // Check if the stock record exists
            if ($stock) {
                // Update the stock amount
                $stock->update(['quantity' => $newStockAmount]);

                // Log information or perform additional actions if needed
                \Log::info("Product ID: $productId, New Stock Amount: $newStockAmount");

                return "Stock updated successfully";
            }

            \Log::info("Product ID: $productId, New Stock Amount: $newStockAmount");

            $this->index();
            return "Forms";
        }

        return "Form not submitted";
    }

    public function testEmail() {
        $this->sendStockNotification();
        return "Test Email Sent";
    }
    public function store(StockRequest $request)
    {
        return Stock::create($request->validated());
    }

    public function show(Stock $stock)
    {
        return $stock;
    }


    public function sendStockNotification() {
        $mail = new StockNotify();
        $mail->from(new Address('notify@zerotwoserver.com', 'no-reply'));
        Mail::to("mdkam02ali@gmail.com")->send($mail);
    }

    public function destroy(Stock $stock)
    {
        $stock->delete();

        return response()->json();
    }
}
