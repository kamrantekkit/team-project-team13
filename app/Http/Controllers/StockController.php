<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockRequest;
use App\Models\Stock;

class StockController extends Controller
{
    public function index()
    {
        return Stock::all();
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

    public function destroy(Stock $stock)
    {
        $stock->delete();

        return response()->json();
    }
}
