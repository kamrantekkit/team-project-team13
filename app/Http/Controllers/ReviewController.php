<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Product;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        return Review::all();
    }

    public function store(ReviewRequest $request, $id)
    {
        $review = $request->validated();

        Review::create([
            'user_id' => auth()->id(),
            'product_id' => $id,
            'description' => $review['description'],
            'rating' => $review['rating'],
        ]);

        Product::find($id)->updateAverageRating();

        return back()->with('success', 'Review created successfully');
    }

    public function show(Review $review)
    {
        return $review;
    }

    public function update(ReviewRequest $request, Review $review)
    {
        $review->update($request->validated());

        return $review;
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return response()->json();
    }
}
