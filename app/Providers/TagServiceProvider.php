<?php

namespace App\Providers;

use App\Models\Tag;
use Illuminate\Support\ServiceProvider;

class TagServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(TagServiceProvider::class, function ($app) {
            return new TagServiceProvider($app);
        });
    }

    public function boot(): void
    {
    }

    public function getCategories()
    {
        $categories = Tag::where('is_category', 1)->get();
        return $categories;
    }
    public function getTags()
    {
        $tags = Tag::where('is_category', 0)->get();
        return $tags;
    }
}
