<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquire extends Model
{
    use HasFactory; 
    protected $fillable = ['product_name','name','email','quantity','message','phone','status','sequence'];
}
