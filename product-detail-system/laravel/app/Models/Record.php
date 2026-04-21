<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    // Add the fields you want to allow for mass assignment
    protected $fillable = [
        'position',   // Allow 'position' to be mass-assigned
        'caption',    // Allow 'caption' to be mass-assigned
        'image',      // Allow 'image' to be mass-assigned
    ];
}
