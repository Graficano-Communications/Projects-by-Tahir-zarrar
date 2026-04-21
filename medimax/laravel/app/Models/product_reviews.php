<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_reviews extends Model
{
    protected $fillable = ['name', 'email','rating',"sequence", 'description', 'product_id', 'status'];
    use HasFactory;
}
