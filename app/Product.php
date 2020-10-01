<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'description','provider_id','warehouse'];


    public function categorys()
    {
        //pertenece a muchas categorias - agregamos el id de la tabla asociativa - pivot
        return $this->belongsToMany('App\Category', 'category_products')->withPivot('category_id', 'id');;
    }
}
