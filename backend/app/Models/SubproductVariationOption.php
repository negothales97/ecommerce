<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubproductVariationOption extends Model
{
    protected $fillable =[
        'subproduct_id',
        'variation_option_id'
    ];
}
