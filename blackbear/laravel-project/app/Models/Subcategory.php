<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table = 'subcategories';

    // Define the relationship with Category model
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }

    // Define the relationship with Product model
    public function products()
    {
        return $this->hasMany(Service::class, 'subcategory_id', 'id');
    }
}
