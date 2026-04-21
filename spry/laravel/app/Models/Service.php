<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'sku',
        'tags',
        'description',
        'description2',
        'service_images',
        'meta_title',
        'meta_description',
        'image_alt',
        'category_id',
        'is_featured', 
    ];

    // Optional: Define relationship (if needed)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
}
