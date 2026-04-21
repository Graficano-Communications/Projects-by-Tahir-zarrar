<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'sub_category_id',
        'name',
        'description',
        'sequence',
        'featured',
        
        'status',
        
        'pcode',
        
        'meta_title',
        'meta_description',
        'meta_tags',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function productExtra()
    {
        return $this->hasOne(ProductExtra::class);
    }

    public function variations()
    {
        return $this->hasMany(ProductVariation::class);
    }
}
