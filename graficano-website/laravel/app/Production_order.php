<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production_order extends Model
{
    protected $fillable = [
        'order_name',
        'company_name',
        'representative_name',
        'designation',
        'email',
        'phone',
        'sequence',
    ];
}
