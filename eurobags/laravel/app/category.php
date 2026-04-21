<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
	use SoftDeletes;
     public function products()
    {
        return $this->hasMany('App\product');
    }
    public function subcategory()
    {
        return $this->hasMany('App\subcategory');
    }
}
