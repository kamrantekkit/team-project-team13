<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Stock extends Model
{
    use Searchable;
    public $timestamps = false;
    protected $fillable = ['quantity','restock_date'];
    protected $casts = [
        'restock_date' => 'date',
    ];

    public function searchableAs()
    {
        return 'stockss_index';
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array<string, mixed>
     */
    public function toSearchableArray()
    {
        return array_merge($this->toArray(),[
            'id' => (string) $this->product_id,
            'product' => $this->product->name,
            'date' => $this->restock_date,
        ]);
    }

}
