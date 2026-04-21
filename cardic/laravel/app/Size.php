<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';

     public function product()
     {
        return $this->belongsTo('App\Product', 'product_id');
     }
}
