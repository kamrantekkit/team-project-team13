<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    public $timestamps = false;
    protected $fillable = ['quantity'];
    protected $casts = [
        'restock_date' => 'datetime',
    ];

    public function index(){
        return $this->quantity;
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

}
