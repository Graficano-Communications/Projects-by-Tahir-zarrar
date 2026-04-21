<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Cast additional_images as an array to handle JSON data easily
    protected $casts = [
        'additional_images' => 'array',
    ];

    public function protypes()
    {
        return $this->hasMany(Protype::class);
    }
    // Project.php (Model)
    public function types()
    {
        return $this->hasMany(Protype::class, 'project_id');
    }

}
