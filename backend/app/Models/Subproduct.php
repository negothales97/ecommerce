<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subproduct extends Model
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
        'product_image_id',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

    public function variationOptions()
    {
        return $this->belongsToMany('App\Models\VariationOption', 'subproduct_variation_options', 'subproduct_id', 'variation_option_id');
    }
    
    public function image()
    {
        return $this->belongsTo('App\Models\ProductImage', 'product_image_id');
    }
}
