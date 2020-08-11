<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConfigurationPayment extends Model
{
    protected $fillable =[
        'minimum_value_credit_card',
        'max_parcel',
        'max_interest',
        'boleto_active',
        'minimum_value_boleto',
        'use_discount_boleto',
        'percentage_discount_boleto',
    ];
}
