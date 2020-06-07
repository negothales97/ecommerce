<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    protected $fillable = [
        'price',
        'stock',
        'weight',
        'depth',
        'width',
        'height',
        'sku',
        'barcode',
        'show',
        'product_id'
    ];
}
