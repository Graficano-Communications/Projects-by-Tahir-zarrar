<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
	public function product()
    {
      return $this->belongsTo('App\product', 'product_id');
    }
    public function variations()
    {
        return $this->hasMany('App\product_variation');
    }
}
