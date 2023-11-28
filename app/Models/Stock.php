<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public $timestamps = false;

    protected $casts = [
        'restock_date' => 'datetime',
    ];
}
