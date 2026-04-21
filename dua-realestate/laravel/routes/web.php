<?php

use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\PaymentplanController;
use App\Http\Controllers\PaymenttableController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTypeController;
use App\Http\Controllers\VideosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index']);
Route::get('about-us', [FrontController::class, 'about']);
Route::get('amenities', [FrontController::class, 'amenities'])->name('amenities');
Route::get('media', [FrontController::class, 'media'])->name('media');
Route::get('contact-us', [FrontController::class, 'contact']);
Route::get('blogs', [FrontController::class, 'blog'])->name('blog.show');
Route::get('blog-detail/{id}', [FrontController::class, 'blog_detail'])->name('blog.detail');
Route::get('projects/{id}', [FrontController::class, 'project'])->name('project.show');
Route::get('project-detail/{id}', [FrontController::class, 'project_detail'])->name('project.detail');
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

// Amenities
Route::get('all-amenities', [AmenitiesController::class, 'view_amenity'])->name('all-amenities');
Route::post('add-amenity-data', [AmenitiesController::class, 'add_amenity_data'])->name('add-amenity-data');
Route::get('add-amenities', [AmenitiesController::class, 'add_amenity'])->name('add-amenity');
Route::get('edit-amenities/{id}', [AmenitiesController::class, 'edit_amenity'])->name('edit-amenity');
Route::post('edit-amenity-data/{id}', [AmenitiesController::class, 'edit_amenity_data'])->name('edit-amenity-data');
Route::delete('delete-amenity/{id}', [AmenitiesController::class, 'delete_amenity'])->name('delete-amenity');
Route::post('sort_amenity', [AmenitiesController::class, 'sort_amenity'])->name('sort_amenity');

// Media Images
Route::get('all-images', [ImagesController::class, 'view_image'])->name('images');
Route::post('add-image-data', [ImagesController::class, 'add_image_data'])->name('add-image-data');
Route::get('add-images', [ImagesController::class, 'add_image'])->name('add-image');
Route::get('edit-images/{id}', [ImagesController::class, 'edit_image'])->name('edit-image');
Route::post('edit-image-data/{id}', [ImagesController::class, 'edit_image_data'])->name('edit-image-data');
Route::delete('delete-image/{id}', [ImagesController::class, 'delete_image'])->name('delete-image');
Route::post('sort_image', [ImagesController::class, 'sort_image'])->name('sort_image');

// Media Video
Route::get('all-videos', [VideosController::class, 'view_video'])->name('videos');
Route::post('add-video-data', [VideosController::class, 'add_video_data'])->name('add-video-data');
Route::get('add-videos', [VideosController::class, 'add_video'])->name('add-video');
Route::get('edit-videos/{id}', [VideosController::class, 'edit_video'])->name('edit-video');
Route::post('edit-video-data/{id}', [VideosController::class, 'edit_video_data'])->name('edit-video-data');
Route::delete('delete-video/{id}', [VideosController::class, 'delete_video'])->name('delete-video');
Route::post('sort_video', [VideosController::class, 'sort_video'])->name('sort_video');

// Blogs
Route::get('all-blogs', [BlogController::class, 'index'])->name('admin-blogs');
Route::get('add-blog', [BlogController::class, 'add_blog'])->name('add-blog');
Route::post('add-blog-data', [BlogController::class, 'store_blog'])->name('add-blog-data');
Route::get('edit-blog/{id}', [BlogController::class, 'edit_blog'])->name('edit-blog');
Route::post('update-blog/{id}', [BlogController::class, 'update_blog'])->name('update-blog');
Route::delete('delete-blog/{id}', [BlogController::class, 'delete_blog'])->name('delete-blog');
Route::post('sort_blog', [BlogController::class, 'sort_blog'])->name('sort_blog');

// Project
Route::get('all-projects', [ProjectController::class, 'index'])->name('admin-projects');
Route::get('add-project', [ProjectController::class, 'add_project'])->name('add-project');
Route::post('add-project-data', [ProjectController::class, 'store_project'])->name('add-project-data');
Route::get('edit-project/{id}', [ProjectController::class, 'edit_project'])->name('edit-project');
Route::post('update-project/{id}', [ProjectController::class, 'update_project'])->name('update-project');
Route::delete('delete-project/{id}', [ProjectController::class, 'delete_project'])->name('delete-project');
Route::post('sort_project', [ProjectController::class, 'sort_project'])->name('sort_project');

// Project_types
Route::get('all-project-types', [ProjectTypeController::class, 'view_project_type'])->name('project-type');
Route::post('add-project-type-data', [ProjectTypeController::class, 'add_project_type_data'])->name('add-project-type-data');
Route::get('add-project-type', [ProjectTypeController::class, 'add_project_type'])->name('add-project-type');
Route::get('edit-project-type/{id}', [ProjectTypeController::class, 'edit_project_type'])->name('edit-project-type');
Route::post('edit-project-type-data/{id}', [ProjectTypeController::class, 'edit_project_type_data'])->name('edit-project-type-data');
Route::delete('delete-project-type/{id}', [ProjectTypeController::class, 'delete_project_type'])->name('delete-project-type');
Route::post('sort_project_type', [ProjectTypeController::class, 'sort_project_type'])->name('sort-project-type');

// Payment Plans
Route::get('all-payment-plans', [PaymentplanController::class, 'index'])->name('admin-payment-plans');
Route::get('add-payment-plan', [PaymentplanController::class, 'add_payment_plan'])->name('add-payment-plan');
Route::post('add-payment-plan-data', [PaymentplanController::class, 'store_payment_plan'])->name('add-payment-plan-data');
Route::get('edit-payment-plan/{id}', [PaymentplanController::class, 'edit_payment_plan'])->name('payment-plans.edit');
Route::post('update-payment-plan/{id}', [PaymentplanController::class, 'update_payment_plan'])->name('update-payment-plan');
Route::delete('delete-payment-plan/{id}', [PaymentplanController::class, 'delete_payment_plan'])->name('payment-plans.destroy');
Route::post('sort_payment_plan', [PaymentplanController::class, 'sort_payment_plan'])->name('sort_payment-plan');
Route::get('/get-project-types/{projectId}', [PaymentplanController::class, 'getTypes'])->name('projects.types');

Route::get('all-payment-tables', [PaymenttableController::class, 'index'])->name('payment-tables');
Route::get('add-payment-table', [PaymenttableController::class, 'add_payment_table'])->name('add-payment-table');
Route::post('add-payment-table-data', [PaymenttableController::class, 'store_payment_table'])->name('add-payment-table-data');
Route::get('edit-payment-table/{id}', [PaymenttableController::class, 'edit_payment_table'])->name('edit-payment-table');
Route::post('update-payment-table/{id}', [PaymenttableController::class, 'update_payment_table'])->name('update-payment-table');
Route::delete('delete-payment-table/{id}', [PaymenttableController::class, 'delete_payment_table'])->name('delete-payment-table');
Route::post('sort-payment-table', [PaymenttableController::class, 'sortPaymenttable'])->name('sort-payment-table');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
