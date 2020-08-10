<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = [
        'email',
        'policy',
        'status',
    ];

    // public function getGenreAttribute($value){
    //     $genre = [
    //         'f' => 'Feminino',
    //         'm' => 'Masculino'
    //     ];
    //     return $genre[$value];
    // }
}
