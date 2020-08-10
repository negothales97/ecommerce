<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerCard extends Model
{
    protected $fillable =[
        'card_number',
        'validity',
        'name_card',
        'customer_id',
    ];
}
