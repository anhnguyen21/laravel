<?php

namespace App;
use App\order_item;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $table="products";
    public function order_item()
    {
        return $this->belongsTo('App\order_item');
    }
}
