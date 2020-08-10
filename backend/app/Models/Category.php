<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        "parent_id",
        "name",
        "slug",
        "meta_description",
        "meta_title",
        "featured",
        "status",
    ];

    public function categories()
    {
        return $this->hasMany('App\Models\Category','parent_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'product_categories', 'category_id', 'product_id');
    }


}
