<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
       //
       protected $fillable = ['id', 'description'];

       public function products()
       {
           return $this->belongsToMany('App\Category','category_products','category_id','product_id')->withTimestamps(); //pertenece a muchas categorias
       }
}
