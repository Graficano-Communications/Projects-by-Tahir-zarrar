<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
    protected $table = 'instagrams';

    protected $fillable = ['alt_text', 'image', 'link', 'sequence'];
}

