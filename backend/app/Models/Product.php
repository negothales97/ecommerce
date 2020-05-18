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
        'meta_title',
        'meta_description',
    ];
}
