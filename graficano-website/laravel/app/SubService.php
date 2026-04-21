<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    protected $fillable = [
        'service_id',
        'name',
        'image',
        'img_alt',
        'banner_image',
        'description',
        's_head',
        'headings',
        'm_head',
        'choose_title',
        'choose_description',
        'call',
        'p_head',
        'p_text',
        'slug',
        'meta_title',
        'meta_description',
        'abt_subservice',
        'abt_subdesc',
        'p_heading',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function faqs()
    {
        return $this->hasMany(Faq::class, 'sub_service_id');
    }
}
