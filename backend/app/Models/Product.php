<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'slug',
        'meta_title',
        'meta_description',
        'show',
        'tag_id',
        'primary',
        'new',
        'sale',
        'has_free_shipping',
        'promotional_price',
        'price',
        'stock',
        'weight',
        'depth',
        'width',
        'height',
        'sku',
        'barcode',
    ];

    public function images()
    {
        return $this->hasMany('App\Models\ProductImage', 'product_id');
    }

    public function products()
    {
        return $this->hasMany('App\Models\Subproduct', 'product_id');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'product_categories', 'product_id', 'category_id');
    }

    public function variations()
    {
        return $this->belongsToMany('App\Models\Variation', 'product_variations', 'product_id', 'variation_id');
    }
    public function tags()
    {
        return $this->belongsTo('App\Models\Tag');
    }
}
