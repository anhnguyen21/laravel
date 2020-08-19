<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class category extends Model
{
    public $table='categories';
    public function product_category()
    {
        return $this->hasMany('App\product_category');
    }
}
