<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'first_heading',
        'detailing',
        'description',
        'service_image',
    ];

    // Relationship with ServiceCharacteristic
    public function characteristics()
    {
        return $this->hasMany(ServiceCharacteristic::class);
    }

    // Relationship with ServiceFaq
    public function faqs()
    {
        return $this->hasMany(ServiceFaq::class);
    }
}
