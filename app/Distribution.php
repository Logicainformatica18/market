<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    protected $fillable = ['id', 'quantity','products_id','warehouses_id'];
}
