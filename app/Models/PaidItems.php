<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaidItems extends Model
{
    protected $fillable = [
        'product_title',
        'seller',
        'quantity',
        'price'
    ];//
}
