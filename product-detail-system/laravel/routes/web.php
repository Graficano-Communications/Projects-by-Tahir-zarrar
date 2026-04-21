<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'add_banner'])->name('product-detail');
Route::get('result', [FrontController::class, 'view_result'])->name('result');
Route::get('image', [FrontController::class, 'view_banner'])->name('banners');
Route::get('add-banners', [FrontController::class, 'add_banner'])->name('add-banner');
Route::post('add-banner-data', [FrontController::class, 'add_banner_data'])->name('add-banner-data');
Route::get('edit-banners/{id}', [FrontController::class, 'edit_banner'])->name('edit-banner');
Route::post('edit-banner-data/{id}', [FrontController::class, 'edit_banner_data'])->name('edit-banner-data');
Route::delete('delete-banner/{id}', [FrontController::class, 'delete_banner'])->name('delete-banner');


Route::get('/records', [RecordController::class, 'index'])->name('records.index');
Route::get('add-record', [RecordController::class, 'add_record'])->name('add-record');
Route::post('/save-record', [RecordController::class, 'store'])->name('save.record');
Route::get('/edit-record/{id}', [RecordController::class, 'edit'])->name('edit.record');  // For Edit form
Route::put('/update-record/{id}', [RecordController::class, 'update'])->name('update.record');  // For Update record
Route::delete('/delete-record/{id}', [RecordController::class, 'destroy'])->name('delete.record');  // For Delete record