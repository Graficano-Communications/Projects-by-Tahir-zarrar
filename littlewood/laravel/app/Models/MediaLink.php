<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaLink extends Model
{
    use HasFactory;

    // Specify the table name if it's different from the model name in plural form
    protected $table = 'media_links';

    // Define the fillable properties for mass assignment
    protected $fillable = [
        'link',
        'sequence',
    ];
}
