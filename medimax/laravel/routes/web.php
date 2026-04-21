<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcatController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InquiresController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginDetailsController;
use App\Http\Controllers\PortfolioController;
use App\Models\Portfolio;
use Illuminate\Http\Resources\PotentiallyMissing;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/create-symlink', function () {
    try {
        Artisan::call('storage:link');
        return 'Symlink created successfully.';
    } catch (\Exception $e) {
        return 'Error creating symlink: ' . $e->getMessage();
    }
});



Route::get('/route-cache', function () {
    try {
        // Clear route cache
        Artisan::call('route:clear');

        // Cache the routes
        Artisan::call('route:cache');

        return 'Route cache cleared and cached successfully.';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});

Route::get('/', function () {

    // Clear route cache
    Artisan::call('route:clear');

    // Cache the routes
    Artisan::call('route:cache');
    return view('index');
});

// Route::get('/product-subcategories/{slug}', [HomeController::class, 'show'])->name('categories.show');
Route::get('/product-by-category/{id}', [HomeController::class, 'sub'])->name('categories.sub');
Route::get('/products-by-subcategory/{slug}', [HomeController::class, 'show'])->name('subcat.show');

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services/{slug}', [HomeController::class, 'services_detail'])->name('services.show');
Route::get('/portfolios/{slug}', [HomeController::class, 'portfolio_detail'])->name('portfolio.show');
Route::get('/portfolios', [HomeController::class, 'portfolios'])->name('portfolios');
Route::get('/timeline', [HomeController::class, 'timeline'])->name('timeline');
Route::get('/catalogues', [HomeController::class, 'catalogues'])->name('catalogues');
Route::post('/catalogue/check-password', [HomeController::class, 'checkPassword'])->name('catalogue.checkPassword');
Route::get('/product-details/{id}', [HomeController::class, 'productdetails'])->name('product-details');




Route::get('/category/{idd}/subcategory/{id}', [HomeController::class, 'showSubcategory'])->name('subcategory');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-details/{id}', [HomeController::class, 'blogdetails'])->name('blog-details');
Route::get('/upcoming', [HomeController::class, 'upcoming'])->name('upcoming');
Route::get('/recent', [HomeController::class, 'recent'])->name('recent');
Route::get('/privacy-policy', [HomeController::class, 'privacypolicy'])->name('privacy-policy');
Route::get('/terms_condition', [HomeController::class, 'terms_condition'])->name('terms_condition');
Route::get('/termsandconditions', [HomeController::class, 'termsandconditions'])->name('termsandconditions');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/product_review/store', [HomeController::class, 'add_product_review'])->name('product_review.store');
//testimonial
Route::get('/send-us-feedback', [HomeController::class, 'feedback'])->name('feedback');
Route::post('/feedback/save', [HomeController::class, 'feedback_save'])->name('feedback.store');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::post('/contact/submit', [HomeController::class, 'submitForm'])->name('contact.submit');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//send us product inquire 
Route::post('/inquires/store', [InquiresController::class, 'store'])->name('inquires.store');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //admin routes//
    Route::post('/banners/approve/{id}', [BannerController::class, 'approve'])->name('banners.approve');
    Route::get('/banners/index', [BannerController::class, 'index'])->name('banners');
    Route::delete('/banners/delete/{id}', [BannerController::class, 'destroy'])->name('banners.destroy');
    Route::get('/banners/edit/{id}', [BannerController::class, 'edit'])->name('banners.edit');
    Route::patch('/banners/update/{id}', [BannerController::class, 'update'])->name('banners.update');
    Route::post('/sort_banner', [BannerController::class, 'updateSequence'])->name('sort_banner');
    Route::get('/admin/banners/create', [BannerController::class, 'create'])->name('banners.create');
    Route::post('/admin/banners/store', [BannerController::class, 'store'])->name('banners.store');
    Route::post('/admin/banners/update-sequence', [BannerController::class, 'updateSequence'])->name('banners.update-sequence');
    Route::post('/blogs/upload', [BlogsController::class, 'upload'])->name('blogs_upload');
    Route::post('/blogs/upload', [BlogsController::class, 'upload'])->name('service.upload');
    Route::post('/blogs/approve/{id}', [BlogsController::class, 'approve'])->name('blogs.approve');
    Route::get('/blogs/index', [BlogsController::class, 'index'])->name('blogs');
    Route::get('/admin/blogs/create', [BlogsController::class, 'create'])->name('blogs.create');
    Route::post('/admin/blogs/store', [BlogsController::class, 'store'])->name('blogs.store');
    Route::delete('/blogs/delete/{id}', [BlogsController::class, 'destroy'])->name('blogs.destroy');
    Route::get('/blogs/edit/{id}', [BlogsController::class, 'edit'])->name('blogs.edit');
    Route::patch('/blogs/update/{id}', [BlogsController::class, 'update'])->name('blogs.update');
    Route::post('/sort_blogs', [BlogsController::class, 'updateSequence'])->name('sort_blogs');
    Route::post('/news/approve/{id}', [NewsController::class, 'approve'])->name('news.approve');
    Route::get('/news/index', [NewsController::class, 'index'])->name('News');
    Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
    Route::delete('/news/delete/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
    Route::patch('/news/update/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::get('/admin/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/admin/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::post('/sort_news', [NewsController::class, 'updateSequence'])->name('sort_news');
    // Team
    Route::post('/teams/approve/{id}', [TeamController::class, 'approve'])->name('teams.approve');
    Route::get('/teams/index', [TeamController::class, 'index'])->name('teams');
    Route::get('/teams/edit/{id}', [TeamController::class, 'edit'])->name('teams.edit');
    Route::delete('/teams/delete/{id}', [TeamController::class, 'destroy'])->name('teams.destroy');
    Route::patch('/teams/update/{id}', [TeamController::class, 'update'])->name('teams.update');
    Route::post('/teams/update-sequence', [TeamController::class, 'updateSequence'])->name('sort_teams');
    Route::get('/admin/teams/create', [TeamController::class, 'create'])->name('teams.create');
    Route::post('/admin/teams/store', [TeamController::class, 'store'])->name('teams.store');


    Route::get('/portfolio/index', [PortfolioController::class, 'index'])->name('portfolio');
    Route::get('/admin/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('/admin/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::patch('/portfolio/update/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::get('/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::delete('/portfolio/delete/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
    Route::post('/portfolio/approve/{id}', [PortfolioController::class, 'approve'])->name('portfolio.approve');
    Route::post('/portfolio/update-sequence', [PortfolioController::class, 'updateSequence'])->name('sort_portfolio');
    Route::post('/check-slug', [PortfolioController::class, 'checkSlug'])->name('check.slug');
    // inquires 
    Route::post('/inquires/approve/{id}', [InquiresController::class, 'approve'])->name('inquires.approve');
    Route::get('/inquires/index', [InquiresController::class, 'index'])->name('inquires');
    // Route::get('/inquires/edit/{id}', [InquiresController::class, 'edit'])->name('inquires.edit');
    // Route::delete('/inquires/delete/{id}', [InquiresController::class, 'destroy'])->name('inquires.destroy');
    // Route::patch('/inquires/update/{id}', [InquiresController::class, 'update'])->name('inquires.update');
    Route::post('/inquires/update-sequence', [InquiresController::class, 'updateSequence'])->name('sort_inquires');
    Route::get('/admin/inquires/create', [InquiresController::class, 'create'])->name('inquires.create');
    // testimonial 
    Route::post('/testimonials/upload', [TestimonialController::class, 'upload'])->name('testimonials.upload');
    Route::post('/testimonials/approve/{id}', [TestimonialController::class, 'approve'])->name('testimonials.approve');
    Route::get('/testimonials/index', [TestimonialController::class, 'index'])->name('testimonials');
    Route::get('/testimonials/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonials.edit');
    Route::delete('/testimonials/delete/{id}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');
    Route::patch('/testimonials/update/{id}', [TestimonialController::class, 'update'])->name('testimonials.update');
    Route::post('/testimonials/update-sequence', [TestimonialController::class, 'updateSequence'])->name('sort_testimonials');
    Route::get('/admin/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
    Route::post('/admin/testimonials/store', [TestimonialController::class, 'store'])->name('testimonials.store');
    Route::post('/categories/approve/{id}', [CategoryController::class, 'approve'])->name('categories.approve');
    Route::get('/categories/index', [CategoryController::class, 'index'])->name('categories');
    Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::post('/sort_category', [CategoryController::class, 'updateSequence'])->name('sort_category');
    Route::post('/subcategories/approve/{id}', [SubcatController::class, 'approve'])->name('subcat.approve');
    Route::get('/subcategories/index', [SubcatController::class, 'index'])->name('subcat');
    Route::get('/admin/subcategories/create', [SubcatController::class, 'create'])->name('subcats.create');
    Route::post('/admin/subcategorie/store', [SubcatController::class, 'store'])->name('subcat.store');
    Route::get('/subcategories/{subcategory}/edit', [SubcatController::class, 'edit'])->name('subcats.edit');
    Route::put('/subcategories/{subcategory}', [SubcatController::class, 'update'])->name('subcategories.update');
    Route::delete('/subcategories/{subcategory}', [SubcatController::class, 'destroy'])->name('subcats.destroy');
    Route::post('/sort_sub_category', [SubcatController::class, 'updateSequence'])->name('sort_sub_category');
    Route::post('/productss/upload', [ProductController::class, 'upload'])->name('productss.upload');
    Route::post('/products/approve/{id}', [ProductController::class, 'approve'])->name('products.approve');
    Route::get('/products/admin/index', [ProductController::class, 'index'])->name('productss');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::get('/getSubcategories/{category}', [ProductController::class, 'getSubcategories'])->name('getSubcategories');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('variations/{variation}/edit', [ProductController::class, 'edit_variation'])->name('variations.edit');
    Route::delete('variations/{variation}', [ProductController::class, 'destroy_variation'])->name('variations.destroy');


    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::patch('/products/{product}/update', [ProductController::class, 'update'])->name('products.update');
    Route::post('/sort_products', [ProductController::class, 'updateSequence'])->name('sort_products');
    Route::get('/products/{id}/variations', [ProductController::class, 'showVariations'])->name('products.view');


    Route::post('/product_review/{pro_id}/approve/{id}', [ProductController::class, 'review_status_approve'])->name('review_status_approve.approve');
    Route::delete('/product_review/{pro_id}/delete/{id}', [ProductController::class, 'review_destroy'])->name('reviews.destroy');

    Route::get('/products/category/{cat_id}/subcategory/{id}/', [ProductController::class, 'sub_category_products'])->name('products.sub_category_products');

    // login_details 
    Route::get('/login_details', [LoginDetailsController::class, 'index'])->name('last_login_details');
});

require __DIR__ . '/auth.php';
