<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    public $table="product_categories";
    public function category()
    {
        return $this->belongsTo('App\category');
    }
}
