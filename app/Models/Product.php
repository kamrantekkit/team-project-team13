<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, searchable;
    protected $fillable = ['name', 'description','price','archived','image_path'];
    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'product_tags','product_id', 'tag_id');
    }

    public function orders(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'product_orders','product_id', 'order_id')->withPivot('quantity');
    }

    public function stock(): HasOne
    {
        return $this->hasOne(Stock::class);
    }



    protected static function boot()
    {
        parent::boot();

        static::created(function ($product) {
            // Create a new stock record when a product is created
            $product->stock()->create([
                'quantity' => 0, // You can set an initial quantity if needed
            ]);
        });
    }

    public function reviews(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Product::class);
    }


    public function searchableAs()
    {
        return 'products_index';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array<string, mixed>
     */
    public function toSearchableArray()
    {
        return array_merge($this->toArray(),[
            'id' => (string) $this->id,
            "name" => $this->name,
            'description' => $this->description,
            'tags' => $this->tags->pluck('id')->map(function ($id) {
                return (string) $id;
            })->toArray(),
            'archived' => (bool) $this->archived,
            'price' => (float) $this->price,
        ]);
    }
}
