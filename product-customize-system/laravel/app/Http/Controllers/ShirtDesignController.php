<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShirtDesignController extends Controller
{
     public function index()
    {
        return view('shirt');
    }
}
