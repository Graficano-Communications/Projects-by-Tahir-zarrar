<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShirtDesignController;

Route::get('/', [ShirtDesignController::class, 'index']);

