<?php

use App\Http\Controllers\BannersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('demo', [FrontController::class, 'demo'])->name('demo');
Route::get('about-us', [FrontController::class, 'about'])->name('about');
Route::get('contact-us', [FrontController::class, 'contact'])->name('contact');
Route::get('blogs', [FrontController::class, 'blog'])->name('blog.show');
Route::get('blog-detail/{id}', [FrontController::class, 'blog_detail'])->name('blog.detail');
Route::get('service/', [FrontController::class, 'service'])->name('service');
Route::get('service-detail/{slug}', [FrontController::class, 'service_detail'])->name('service.detail');





// routes/web.php


Route::post('/send-message', [ContactController::class, 'sendMail'])->name('contact.send');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Banners
Route::get('all-banners', [BannersController::class, 'view_banner'])->name('banners');
Route::post('add-banner-data', [BannersController::class, 'add_banner_data'])->name('add-banner-data');
Route::get('add-banners', [BannersController::class, 'add_banner'])->name('add-banner');
Route::get('edit-banners/{id}', [BannersController::class, 'edit_banner'])->name('edit-banner');
Route::post('edit-banner-data/{id}', [BannersController::class, 'edit_banner_data'])->name('edit-banner-data');
Route::delete('delete-banner/{id}', [BannersController::class, 'delete_banner'])->name('delete-banner');
Route::post('sort_banner', [BannersController::class, 'sort_banner'])->name('sort_banner');


// Blogs
Route::get('all-blogs', [BlogController::class, 'index'])->name('admin-blogs');
Route::get('add-blog', [BlogController::class, 'add_blog'])->name('add-blog');
Route::post('add-blog-data', [BlogController::class, 'store_blog'])->name('add-blog-data');
Route::get('edit-blog/{id}', [BlogController::class, 'edit_blog'])->name('edit-blog');
Route::post('update-blog/{id}', [BlogController::class, 'update_blog'])->name('update-blog');
Route::delete('delete-blog/{id}', [BlogController::class, 'delete_blog'])->name('delete-blog');
Route::post('sort_blog', [BlogController::class, 'sort_blog'])->name('sort_blog');

// Team
Route::get('all-teams', [TeamController::class, 'view_team'])->name('teams');
Route::post('add-team-data', [TeamController::class, 'add_team_data'])->name('add-team-data');
Route::get('add-teams', [TeamController::class, 'add_team'])->name('add-team');
Route::get('edit-teams/{id}', [TeamController::class, 'edit_team'])->name('edit-team');
Route::post('edit-team-data/{id}', [TeamController::class, 'edit_team_data'])->name('edit-team-data');
Route::delete('delete-team/{id}', [TeamController::class, 'delete_team'])->name('delete-team');
Route::post('sort_team', [TeamController::class, 'sort_team'])->name('sort_team');

// Services
Route::get('all-services', [ServiceController::class, 'view_service'])->name('services');
Route::post('add-service-data', [ServiceController::class, 'add_service_data'])->name('add-service-data');
Route::get('add-services', [ServiceController::class, 'add_service'])->name('add-service');
Route::get('edit-services/{id}', [ServiceController::class, 'edit_service'])->name('edit-service');
Route::post('edit-service-data/{id}', [ServiceController::class, 'edit_service_data'])->name('edit-service-data');
Route::delete('delete-service/{id}', [ServiceController::class, 'delete_service'])->name('delete-service');








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
