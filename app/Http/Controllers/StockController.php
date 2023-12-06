<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockRequest;
use App\Mail\StockNotify;
use App\Models\Stock;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Support\Facades\Mail;

class StockController extends Controller
{
    public function index()
    {
        $this->sendStockNotification();
        return "mail sent";
//        return Stock::all();
    }

    public function store(StockRequest $request)
    {
        return Stock::create($request->validated());
    }

    public function show(Stock $stock)
    {
        return $stock;
    }

    public function update(StockRequest $request, Stock $stock)
    {
        $stock->update($request->validated());

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
