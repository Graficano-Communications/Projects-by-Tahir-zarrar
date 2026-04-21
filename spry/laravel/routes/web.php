<?php

use App\Http\Controllers\BannersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\NewsEventsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubcategoriesController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/clear-all-cache', function () {
    Artisan::call('optimize:clear');
    return '✅ All caches (route, config, view, app) cleared successfully.';
});


Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('catalogues', [FrontController::class, 'catalouges'])->name('catalouges');
Route::get('departments', [FrontController::class, 'departments'])->name('departments');
Route::get('about-us', [FrontController::class, 'about'])->name('about');
Route::get('compliances', [FrontController::class, 'compliance'])->name('compliances');
Route::get('contact-us', [FrontController::class, 'contact'])->name('contact');
Route::get('news', [FrontController::class, 'news'])->name('news.show');
Route::get('blogs', [FrontController::class, 'blog'])->name('blog.show');
Route::get('blog-detail/{slug}', [FrontController::class, 'blog_detail'])->name('blog.detail');
Route::get('/products-by-Category/{categorySlug}', [FrontController::class, 'products'])->name('products');
Route::get('/product/{serviceSlug}', [FrontController::class, 'productDetail'])->name('product.detail');
Route::get('/download/{id}', [FrontController::class, 'download'])->name('catalog.download');
Route::post('/inquiry/send', [InquiryController::class, 'send'])->name('inquiry.send');

// routes/web.php

Route::post('/submit-form', [ContactController::class, 'submitForm'])->name('submit.form');

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
Route::post('/get-subcategories', [ServiceController::class, 'getSubcategories'])->name('get-subcategories');

// Catalogues (There will some sort of confusion for any other person in Catalogues & Catalouges Spelling so be attentive for it)
Route::get('all-catalogues', [CatalogueController::class, 'view_catalogues'])->name('admin-catalogues');
Route::get('add-catalogues', [CatalogueController::class, 'add_catalogues'])->name('add-catalogues');
Route::post('add-catalogues-data', [CatalogueController::class, 'add_catalogues_data'])->name('add-catalogues-data');
Route::get('edit-catalogues/{id}', [CatalogueController::class, 'edit_catalogues'])->name('edit-catalogues');
Route::post('edit-catalogues-data/{id}', [CatalogueController::class, 'edit_catalogue_data'])->name('edit-catalogues-data');
Route::delete('delete-catalogue/{id}', [CatalogueController::class, 'delete_catalogue'])->name('delete-catalogue');
Route::post('sort_catalogue', [CatalogueController::class, 'sort_catalogue'])->name('sort_catalogue');

// Department
Route::get('all-departments', [DepartmentsController::class, 'index'])->name('admin-departments');
Route::get('add-department', [DepartmentsController::class, 'add_department'])->name('add-department');
Route::post('add-department-data', [DepartmentsController::class, 'store_department'])->name('add-department-data');
Route::get('edit-department/{id}', [DepartmentsController::class, 'edit_department'])->name('edit-department');
Route::post('update-department/{id}', [DepartmentsController::class, 'update_department'])->name('update-department');
Route::delete('delete-department/{id}', [DepartmentsController::class, 'delete_department'])->name('delete-department');
Route::post('sort_department', [DepartmentsController::class, 'sort_department'])->name('sort_department');

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

// News & Events
Route::get('all-news-events', [NewsEventsController::class, 'view_news_event'])->name('news-events');
Route::post('add-news-event-data', [NewsEventsController::class, 'add_news_event_data'])->name('add-news-event-data');
Route::get('add-news-event', [NewsEventsController::class, 'add_news_event'])->name('add-news-event');
Route::get('edit-news-event/{id}', [NewsEventsController::class, 'edit_news_event'])->name('edit-news-event');
Route::post('edit-news-event-data/{id}', [NewsEventsController::class, 'edit_news_event_data'])->name('edit-news-event-data');
Route::delete('delete-news-event/{id}', [NewsEventsController::class, 'delete_news_event'])->name('delete-news-event');
Route::post('sort-news-event', [NewsEventsController::class, 'sort'])->name('sort_news_event');

Route::get('/{categorySlug}/{subCategorySlug}', [FrontController::class, 'productsBySubCategory'])->name('products.subcategory');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
