<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return Tag::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
        ]);

        return Tag::create($request->validated());
    }

    public function show(Tag $tag)
    {
        return $tag;
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => ['required'],
        ]);

        $tag->update($request->validated());

        return $tag;
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return response()->json();
    }
}
