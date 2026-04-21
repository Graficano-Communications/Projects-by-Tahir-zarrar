<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCharacteristic extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'heading',
        'detail',
        'image',
    ];

    // Relationship with Service
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
