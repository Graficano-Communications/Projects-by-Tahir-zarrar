<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_login extends Model
{
    use HasFactory;
    protected $fillable = [
        'last_login_at', 'last_login_ip', 'user_agent', 'device', 'browser', 'platform'
    ];
}
