<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peripheral extends Model
{
    protected $fillable = [
        'name',
        'model',
        'price',
        'watt',
    ];
}
