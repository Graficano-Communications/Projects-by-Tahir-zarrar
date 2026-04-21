<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  product_order_product extends Model
{
    protected $table = 'product_order_products';
    protected $fillable = [
        'product_name',
        'product_emergency',
        'photography_type',
        'background',
        'canvas_size',
        'sample_picking',
        'angle_image_count',
        'product_image',
        'product_angle_images',
    ];
}
