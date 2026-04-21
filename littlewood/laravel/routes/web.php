<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SubcategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\SubDepartmentsController;
use App\Http\Controllers\CatalougesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clear-routes', function () {
    Artisan::call('route:clear');
    return 'Route cache cleared!';
});

Route::get('/', [IndexController::class, 'index']);
Route::get('about-us', [IndexController::class, 'about'])->name('about-us');
Route::get('our-team', [IndexController::class, 'team'])->name('our-team');
Route::get('blog', [IndexController::class, 'blog'])->name('blog');
Route::get('blog-detail/{id}', [IndexController::class, 'blog_detail'])->name('blog-detail');
Route::get('news-events', [IndexController::class, 'news'])->name('news-events');
Route::get('catalogues', [IndexController::class, 'catalogue'])->name('catalogues');
Route::post('/download', [IndexController::class, 'download'])->name('catalogue.download');
Route::get('department/{id}', [IndexController::class, 'department'])->name('department');
Route::get('history-timeline', [IndexController::class, 'history'])->name('history');
Route::get('contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::post('/submit-form', [ContactController::class, 'submitForm'])->name('submit.form');
Route::get('sample-request', [ContactController::class, 'sample_request'])->name('sample-request');
Route::post('/sample', [ContactController::class, 'sample'])->name('sample.form');
Route::get('media', [MediaController::class, 'index'])->name('media');


Route::get('products', [IndexController::class, 'product'])->name('products');
Route::get('products/category/{id}', [IndexController::class, 'category'])->name('products.category');
Route::get('products/subcategory/{id}', [IndexController::class, 'subcategory'])->name('products.subcategory');
Route::get('product-detail/{id}', [IndexController::class, 'detailindex'])->name('product-detail');

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

// Banners
Route::get('all-banners', [BannersController::class, 'view_banner'])->name('banners');
Route::post('add-banner-data', [BannersController::class, 'add_banner_data'])->name('add-banner-data');
Route::get('add-banners', [BannersController::class, 'add_banner'])->name('add-banner');
Route::get('edit-banners/{id}', [BannersController::class, 'edit_banner'])->name('edit-banner');
Route::post('edit-banner-data/{id}', [BannersController::class, 'edit_banner_data'])->name('edit-banner-data');
Route::delete('delete-banner/{id}', [BannersController::class, 'delete_banner'])->name('delete-banner');
Route::post('sort_banner', [BannersController::class, 'sort_banner'])->name('sort_banner');

// Media
Route::get('all-media', [MediaController::class, 'view_media'])->name('all-media');
Route::post('add-media-data', [MediaController::class, 'add_media_data'])->name('add-media-data');
Route::get('add-media', [MediaController::class, 'add_media'])->name('add-media');
Route::get('edit-media/{id}', [MediaController::class, 'edit_media'])->name('edit-media');
Route::post('edit-media-data/{id}', [MediaController::class, 'edit_media_data'])->name('edit-media-data');
Route::delete('delete-media/{id}', [MediaController::class, 'delete_media'])->name('delete-media');
Route::post('sort_media', [MediaController::class, 'sort_media'])->name('sort_media');


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

// Product
Route::get('all-products', [ProductsController::class, 'index'])->name('admin-products');
Route::get('add-product', [ProductsController::class, 'add_product'])->name('add-product');
Route::post('add-product-data', [ProductsController::class, 'store_product'])->name('add-product-data');
Route::get('edit-product/{id}', [ProductsController::class, 'edit_product'])->name('edit-product');
Route::post('update-product/{id}', [ProductsController::class, 'update_product'])->name('update-product');
Route::delete('delete-product/{id}', [ProductsController::class, 'delete_product'])->name('delete-product');
Route::delete('/delete-product-image', [ProductsController::class, 'deleteImage'])->name('delete-product-image');
Route::post('sort_product', [ProductsController::class, 'sort_product'])->name('sort_product');


// Department
Route::get('all-departments', [DepartmentsController::class, 'index'])->name('admin-departments');
Route::get('add-department', [DepartmentsController::class, 'add_department'])->name('add-department');
Route::post('add-department-data', [DepartmentsController::class, 'store_department'])->name('add-department-data');
Route::get('edit-department/{id}', [DepartmentsController::class, 'edit_department'])->name('edit-department');
Route::post('update-department/{id}', [DepartmentsController::class, 'update_department'])->name('update-department');
Route::delete('delete-department/{id}', [DepartmentsController::class, 'delete_department'])->name('delete-department');
Route::post('sort_department', [DepartmentsController::class, 'sort_department'])->name('sort_department');


// Sub-Department
Route::get('all-sub-departments/{id}', [SubDepartmentsController::class, 'index'])->name('admin-sub-departments');
Route::get('add-sub-department/{id}', [SubDepartmentsController::class, 'add_sub_department'])->name('add-sub-department');
Route::post('add-sub-department-data', [SubDepartmentsController::class, 'store_sub_department'])->name('add-sub-department-data');
Route::get('edit-sub-department/{id}', [SubDepartmentsController::class, 'edit_sub_department'])->name('edit-sub-department');
Route::post('update-sub-department/{id}', [SubDepartmentsController::class, 'update_sub_department'])->name('update-sub-department');
Route::delete('delete-sub-department/{id}', [SubDepartmentsController::class, 'delete_sub_department'])->name('delete-sub-department');
Route::post('sort-sub-department', [SubDepartmentsController::class, 'sortSubDepartment'])->name('sort-sub-department');

// Event
Route::get('all-events', [EventsController::class, 'view_events'])->name('admin-events');
Route::get('add-event', [EventsController::class, 'add_event'])->name('add-event');
Route::post('add-event-data', [EventsController::class, 'add_event_data'])->name('add-event-data');
Route::get('edit-event/{id}', [EventsController::class, 'edit_event'])->name('edit-event');
Route::post('edit-event-data/{id}', [EventsController::class, 'edit_event_data'])->name('edit-event-data');
Route::delete('delete-event/{id}', [EventsController::class, 'delete_event'])->name('delete-event');

// Catalogues (There will some sort of confusion for any other person in Catalogues & Catalouges Spelling so be attentive for it)
Route::get('all-catalogues', [CatalougesController::class, 'view_catalogues'])->name('admin-catalogues');
Route::get('add-catalogues', [CatalougesController::class, 'add_catalogues'])->name('add-catalogues');
Route::post('add-catalogues-data', [CatalougesController::class, 'add_catalogues_data'])->name('add-catalogues-data');
Route::get('edit-catalogues/{id}', [CatalougesController::class, 'edit_catalogues'])->name('edit-catalogues');
Route::post('edit-catalogues-data/{id}', [CatalougesController::class, 'edit_catalogue_data'])->name('edit-catalogues-data');
Route::delete('delete-catalogue/{id}', [CatalougesController::class, 'delete_catalogue'])->name('delete-catalogue');
Route::post('sort_catalogue', [CatalougesController::class, 'sort_catalogue'])->name('sort_catalogue');


// Blogs
Route::get('all-blogs', [BlogsController::class, 'index'])->name('admin-blogs');
Route::get('add-blog', [BlogsController::class, 'add_blog'])->name('add-blog');
Route::post('add-blog-data', [BlogsController::class, 'store_blog'])->name('add-blog-data');
Route::get('edit-blog/{id}', [BlogsController::class, 'edit_blog'])->name('edit-blog');
Route::post('update-blog/{id}', [BlogsController::class, 'update_blog'])->name('update-blog');
Route::delete('delete-blog/{id}', [BlogsController::class, 'delete_blog'])->name('delete-blog');
Route::post('sort_blog', [BlogsController::class, 'sort_blog'])->name('sort_blog');

// Portfolio
Route::get('all-portfolios', [PortfolioController::class, 'view_portfolio'])->name('portfolios');
Route::get('add-portfolio', [PortfolioController::class, 'add_portfolio'])->name('add-portfolio');
Route::post('add-portfolio-data', [PortfolioController::class, 'add_portfolio_data'])->name('add-portfolio-data');
Route::get('edit-portfolio/{id}', [PortfolioController::class, 'edit_portfolio'])->name('edit-portfolio');
Route::post('update-portfolio/{id}', [PortfolioController::class, 'edit_portfolio_data'])->name('update-portfolio');
Route::delete('delete-portfolio/{id}', [PortfolioController::class, 'delete_portfolio'])->name('delete-portfolio');
Route::post('sort-portfolio', [PortfolioController::class, 'sort_portfolio'])->name('sort-portfolio');



