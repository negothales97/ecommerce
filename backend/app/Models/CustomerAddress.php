<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    protected $fillable =[
        'zip_code',
        'street',
        'number',
        'complement',
        'district',
        'state_id',
        'city',
        'customer_id'
    ];
}
