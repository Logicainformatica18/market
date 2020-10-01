<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['id', 'dni','firstname','lastname','name','cellphone','email'];
}
