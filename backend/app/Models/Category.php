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
        "status",
    ];

    public function categories()
    {
        return $this->hasMany('App\Models\Category','parent_id');
    }
}
