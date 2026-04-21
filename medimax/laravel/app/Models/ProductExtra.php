<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductExtra extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'video_link',
        'production_images',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
