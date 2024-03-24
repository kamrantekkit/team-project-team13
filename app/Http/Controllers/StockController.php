<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\StockRequest;
use App\Mail\StockNotify;
use App\Models\Product;
use App\Models\Stock;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Support\Facades\Mail;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::take(10)->get(); // Fetch all records

        return view("admin.stock.stock-management", ['stocks' => $stocks]);
    }

    public function view($id)
    {
        $stock = Stock::find($id);

        return view("admin.stock.stock_view", ['stock' => $stock]);
    }


    public function update(StockRequest $request)
    {
        $stock = Stock::find($request->input('id'));

        if (!$stock) {
            return redirect()->route('stock.index');
        }

        $date = Carbon::parse($request->input('restock_date'));

        $stock->update([
            'quantity' => $request->input('quantity'),
            'restock_date' => $date
        ]);

        $stock->save();


        session()->flash('success', 'Stock Updated');
        return redirect()->route('stock.index');
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
        Mail::to("mdkam02ali@gmail.com", 'test')->send($mail);
    }

    public function destroy(Stock $stock)
    {
        $stock->delete();

        return response()->json();
    }
}
