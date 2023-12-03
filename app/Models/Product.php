<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['name'];

    public function stock()
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
}
