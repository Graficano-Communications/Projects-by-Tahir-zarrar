<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pro_id',
        'position',   // Allow 'position' to be mass-assigned
        'caption',    // Allow 'caption' to be mass-assigned
        'image',      // Allow 'image' to be mass-assigned
    ];


    public function proImage()
    {
        return $this->belongsTo(ProImage::class, 'pro_id');
    }
}
