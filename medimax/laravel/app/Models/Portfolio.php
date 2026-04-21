<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming conventions
    protected $table = 'portfolios';

    // Specify the columns that can be mass-assigned
    protected $fillable = [
        'name',
        'slug',
        'description',
        'front_image',
        'detail_image',
        'status',
        'sequence',
        'meta_title',
        'meta_description',
    ];

  

    public function images()
    {
        return $this->hasMany(PortfolioImage::class);
    }
}
