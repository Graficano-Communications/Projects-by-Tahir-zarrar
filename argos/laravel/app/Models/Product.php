<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
        'subcategory_id',
        'product_name',
        'slug',
        'is_featured',
        'meta_title',
        'meta_description',
        'product_description',
        'product_images', // For storing multiple images as JSON
    ];
    

    /**
     * Relationship: A product belongs to a category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Relationship: A product belongs to a subcategory.
     */
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    /**
     * Relationship: A product has many variations.
     */
    public function variations()
    {
        return $this->hasMany(ProductVariation::class);
    }
}
