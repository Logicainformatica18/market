<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'description','providers_id'];


    public function categorys()
    {
        //pertenece a muchas categorias - agregamos el id de la tabla asociativa - pivot
        return $this->belongsToMany('App\Category', 'category_products')->withPivot('category_id', 'id');
    }
    public function provider(){
        return $this->belongsTo('App\Provider', 'providers_id');
    }
}
