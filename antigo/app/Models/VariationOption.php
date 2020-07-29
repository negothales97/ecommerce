<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VariationOption extends Model
{
    protected $fillable = [
        'variation_id',
        'name'
    ];

    public function variation()
    {
        return $this->belongsTo('App\Models\Variation', 'variation_id');
    }
}
