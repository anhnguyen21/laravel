<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use function GuzzleHttp\Promise\all;

class message extends Model
{
    public $timestamps = false;
   protected $table="chatbox";
}
