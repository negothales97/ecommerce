<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
        'primary',
        'new',
        'sale',
        'slug',
        'price',
        'stock',
        'meta_title',
        'meta_description',
    ];

   
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'product_categories', 'product_id', 'category_id');
    }
    public function tags()
    {
        return $this->hasMany('App\Models\Tag');
    }
}
