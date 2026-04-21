<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','slug', 'image_path', 'status', 'sequence', 'bnf_tags', 'icon_path', 'detail_image_path', 'bnf_image_path'
    ];

    protected $casts = [
        'bnf_tags' => 'array', // Automatically casts bnf_tags to an array
    ];
}
