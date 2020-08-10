<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use Notifiable;
    
    protected $guard = 'customer';

    protected $fillable =[
        'name',
        'email',
        'document_type',
        'document_number',
        'birthday',
        'cellphone',
        'password'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
