<?php

use App\Http\Controllers\AddCatalougesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProcessStepsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubcategoriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('about-us', [FrontController::class, 'about'])->name('about');
Route::get('news-events', [FrontController::class, 'newsevent'])->name('news-event');
Route::get('catalouge', [FrontController::class, 'catalouge'])->name('catalouges');
Route::get('contact-us', [FrontController::class, 'contact'])->name('contact');
Route::get('blogs', [FrontController::class, 'blog'])->name('blog');
Route::get('products/{categorySlug}/{subcategorySlug?}', [FrontController::class, 'products'])->name('product.show');
Route::get('product-detail/{slug}', [FrontController::class, 'productDetail'])->name('product.detail');
Route::get('blog-detail/{id}', [FrontController::class, 'blog_detail'])->name('blog.detail');
Route::get('/category/{id}/subcategories', [FrontController::class, 'Subcategories'])->name('category.subcategories');


Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::post('/cart/remove', [CartController::class, 'removeItem'])->name('cart.remove');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.process');
Route::get('/checkout/thank-you/{orderId}', [CheckoutController::class, 'thankYou'])->name('checkout.thankYou');






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

// Amenities IS using as News and Events 
Route::get('all-news', [AmenitiesController::class, 'view_amenity'])->name('all-amenities');
Route::post('add-amenity-data', [AmenitiesController::class, 'add_amenity_data'])->name('add-amenity-data');
Route::get('add-news', [AmenitiesController::class, 'add_amenity'])->name('add-amenity');
Route::get('edit-news/{id}', [AmenitiesController::class, 'edit_amenity'])->name('edit-amenity');
Route::post('edit-amenity-data/{id}', [AmenitiesController::class, 'edit_amenity_data'])->name('edit-amenity-data');
Route::delete('delete-amenity/{id}', [AmenitiesController::class, 'delete_amenity'])->name('delete-amenity');
Route::post('sort_amenity', [AmenitiesController::class, 'sort_amenity'])->name('sort_amenity');

// Process Steps Routes
Route::get('all-process-steps', [ProcessStepsController::class, 'view_process_steps'])->name('all-process-steps');
Route::post('add-process-step-data', [ProcessStepsController::class, 'add_process_step_data'])->name('add-process-step-data');
Route::get('add-process-step', [ProcessStepsController::class, 'add_process_step'])->name('add-process-step');
Route::get('edit-process-step/{id}', [ProcessStepsController::class, 'edit_process_step'])->name('edit-process-step');
Route::post('edit-process-step-data/{id}', [ProcessStepsController::class, 'edit_process_step_data'])->name('edit-process-step-data');
Route::delete('delete-process-step/{id}', [ProcessStepsController::class, 'delete_process_step'])->name('delete-process-step');
Route::post('sort_process_step', [ProcessStepsController::class, 'sort_process_step'])->name('sort-process-step');


// Blogs
Route::get('all-blogs', [BlogController::class, 'index'])->name('admin-blogs');
Route::get('add-blog', [BlogController::class, 'add_blog'])->name('add-blog');
Route::post('add-blog-data', [BlogController::class, 'store_blog'])->name('add-blog-data');
Route::get('edit-blog/{id}', [BlogController::class, 'edit_blog'])->name('edit-blog');
Route::post('update-blog/{id}', [BlogController::class, 'update_blog'])->name('update-blog');
Route::delete('delete-blog/{id}', [BlogController::class, 'delete_blog'])->name('delete-blog');
Route::post('sort_blog', [BlogController::class, 'sort_blog'])->name('sort_blog');

// Category
Route::get('all-categories', [CategoriesController::class, 'index'])->name('categories');
Route::get('add-category', [CategoriesController::class, 'add_category'])->name('add-category');
Route::post('add-category-data', [CategoriesController::class, 'store_category'])->name('add-category-data');
Route::get('edit-category/{id}', [CategoriesController::class, 'edit_category'])->name('edit-category');
Route::post('update-category/{id}', [CategoriesController::class, 'update_category'])->name('update-category');
Route::delete('delete-category/{id}', [CategoriesController::class, 'delete_category'])->name('delete-category');
Route::post('sort_category', [CategoriesController::class, 'sort_category'])->name('sort_category');


// Sub-Category
Route::get('all-sub-categories/{id}', [SubcategoriesController::class, 'index'])->name('sub-categories');
Route::get('add-sub-category/{id}', [SubcategoriesController::class, 'add_sub_category'])->name('add-sub-category');
Route::post('add-sub-category-data', [SubcategoriesController::class, 'store_sub_category'])->name('add-sub-category-data');
Route::get('edit-sub-category/{id}', [SubcategoriesController::class, 'edit_sub_category'])->name('edit-sub-category');
Route::post('update-sub-category/{id}', [SubcategoriesController::class, 'update_sub_category'])->name('update-sub-category');
Route::delete('delete-sub-category/{id}', [SubcategoriesController::class, 'delete_sub_category'])->name('delete-sub-category');
Route::post('/getSubcategories', [SubcategoriesController::class, 'getSubcategories'])->name('getSubcategories');
Route::post('sort-sub-category', [SubcategoriesController::class, 'sortSubCategory'])->name('sort-sub-category');

// Catalogues (There will some sort of confusion for any other person in Catalogues & Catalouges Spelling so be attentive for it)
Route::get('all-catalogues', [AddCatalougesController::class, 'view_catalogues'])->name('admin-catalogues');
Route::get('add-catalogues', [AddCatalougesController::class, 'add_catalogues'])->name('add-catalogues');
Route::post('add-catalogues-data', [AddCatalougesController::class, 'add_catalogues_data'])->name('add-catalogues-data');
Route::get('edit-catalogues/{id}', [AddCatalougesController::class, 'edit_catalogues'])->name('edit-catalogues');
Route::post('edit-catalogues-data/{id}', [AddCatalougesController::class, 'edit_catalogue_data'])->name('edit-catalogues-data');
Route::delete('delete-catalogue/{id}', [AddCatalougesController::class, 'delete_catalogue'])->name('delete-catalogue');
Route::post('sort_catalogue', [AddCatalougesController::class, 'sort_catalogue'])->name('sort_catalogue');

// Product
Route::get('all-products', [ProductsController::class, 'index'])->name('admin-products');
Route::get('add-product', [ProductsController::class, 'add_product'])->name('add-product');
Route::post('add-product-data', [ProductsController::class, 'store_product'])->name('add-product-data');
Route::get('edit-product/{id}', [ProductsController::class, 'edit_product'])->name('edit-product');
Route::post('update-product/{id}', [ProductsController::class, 'update_product'])->name('update-product');
Route::delete('delete-product/{id}', [ProductsController::class, 'delete_product'])->name('delete-product');
Route::post('sort_product', [ProductsController::class, 'sort_product'])->name('sort_product');
Route::post('/get-subcategories', [ProductsController::class, 'getSubcategories'])->name('get-subcategories');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
