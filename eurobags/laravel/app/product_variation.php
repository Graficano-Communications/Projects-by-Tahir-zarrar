<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_variation extends Model
{
    public function product()
    {
    return $this->belongsTo('App\product', 'product_id');
    }
    public function option()
    {
    return $this->belongsTo('App\option', 'option_id');
    }
    public function option_value()
    {
    return $this->belongsTo('App\option_value', 'option_value_id');
    }
    public function color()
    {
    return $this->belongsTo('App\image', 'color_id');
    }
}
 