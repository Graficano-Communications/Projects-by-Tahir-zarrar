<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    public function product()
    {
      return $this->belongsTo('App\product', 'product_id');
    }
    public function values()
    {
        return $this->hasMany('App\option_value');
    }
    public function variations()
    {
        return $this->hasMany('App\product_variation');
    }
}
