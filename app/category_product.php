<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_product extends Model
{
    //
    protected $fillable = ['id', 'category_id','product_id'];
    public function product()
    {
        return $this->hasMany('App\Product',"product_id");
    }
    public function category()
    {

        return $this->belongsTo('App\Category');
    }
}
