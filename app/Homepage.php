<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $table = 'homepages';
    protected $fillable = [

        'text',
        'popular',
        'promotion',
        'productname',
        'background',
        'price'


        
    ];
}
