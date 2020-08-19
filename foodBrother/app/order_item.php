<?php

namespace App;
use App\product;
use Illuminate\Database\Eloquent\Model;

class order_item extends Model
{
    public $timestamps = false;
    public $table='order_items';
    public function product()
    {
        return $this->hasMany('App\product');
    }
}
