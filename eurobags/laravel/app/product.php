<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
	use SoftDeletes;
    public function sizes()
    {
        return $this->hasMany('App\Size');
    }
    public function category()
    {
    return $this->belongsTo('App\category', 'category_id');
    }
    public function images()
    {
        return $this->hasMany('App\image');
    }
    public function options()
    {
        return $this->hasMany('App\option');
    }
    public function variations()
    {
        return $this->hasMany('App\product_variation');
    }

}
