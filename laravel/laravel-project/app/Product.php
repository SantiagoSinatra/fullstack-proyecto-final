<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'name_prod', 'price', 'pic_prod'
    ];

    protected $dates = ['created_at'];
}
