<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'product_id',
        'description',
        'rating'
    ];


    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
