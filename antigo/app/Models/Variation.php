<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    protected $fillable = [
        'name'
    ];
    protected $appends = ['links'];  

    public function options()
    {
        return $this->hasMany('App\Models\VariationOption', 'variation_id');
    }

    public function getLinksAttribute()
    {
        return [
            'options' => $this->options
        ];
    }

    
}
