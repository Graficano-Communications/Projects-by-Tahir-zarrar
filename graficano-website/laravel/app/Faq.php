<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public function subService()
    {
        return $this->belongsTo(SubService::class, 'sub_service_id');
    }

    protected $fillable = [
        'sub_service_id', 
        'faq',            
        'answer'           
    ];
}
