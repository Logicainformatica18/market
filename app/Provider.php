<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = ['id', 'name','description','cellphone'];
    public function product(){
        return $this->hasMany('App\Product');
    }
}
