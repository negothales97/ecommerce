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
        'variation_id',
        'variation_option_id',
        'product_image_id',
        'product_id'
    ];

    public function variation()
    {
        return $this->belongsTo('App\Models\Variation', 'variation_id');
    }
    public function variationOption()
    {
        return $this->belongsTo('App\Models\VariationOption', 'variation_option_id');
    }

    public function getVariationAttribute()
    {
        return $this->variationOption->name;
    }
}
