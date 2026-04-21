<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name',
        'email',
        'portfolio',
        'portfolio_id',
        'rating',
        'comment',
        'status',
    ];
}
