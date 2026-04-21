<?php

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

Route::get('/imgs','HomeController@imgs')->name('imgs'); 
Route::get('/pass/{pas}','HomeController@pass');
Route::get('/', 'HomeController@index')->name('home');
Route::post('/SendMail','HomeController@SendMail')->name('SendMail');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/local', 'HomeController@local')->name('local')->middleware('restrictIp');

Route::get('/brand_ambassadors', 'HomeController@brand_ambassadors')->name('brand_ambassadors');
Route::get('/brand_ambassador/{slug}','HomeController@brand_ambassador')->name('brand_ambassador');

Route::get('/blog_posts', 'HomeController@blog_posts')->name('blog_posts');
Route::get('/blog_post/{slug}','HomeController@blog_post')->name('blog_post');
Route::get('/page/{slug}','HomeController@page')->name('page');

Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/events', 'HomeController@events')->name('events');
Route::post('/get_coupon/{code}', 'HomeController@get_coupon')->name('get_coupon');



Route::get('/media','HomeController@media')->name('media');
Route::get('/departments','HomeController@department')->name('departments');
Route::get('/compliances', 'HomeController@compliances')->name('compliances');
Route::get('/resources', 'HomeController@resources')->name('resources');
Route::post('/downloadcatlog','HomeController@downloadcatlog')->name('downloadcatlog');
// Route::get('/product', 'HomeController@products')->name('product');
Route::get('/subcategory', 'HomeController@subcategory')->name('subcategory');

Route::get('/category/{category_slug}/{subcategory_slug}','HomeController@get_by_category')->name('category');
Route::get('/products/category/{category_slug}','HomeController@products')->name('products.catgeory');
Route::get('/product_by_category/{category_slug}/{subcategory_slug}','HomeController@product_by_category')->name('product_by_category');
Route::get('/products_by_subcategory/{category}/{subsubcategory}','HomeController@product_by_subcategory')->name('products_by_subcategory');
Route::get('/product_by_sub_subcategory/{category}','ProductController@product_by_sub_subcategory')->name('product_by_sub_subcategory');

Route::get('/new_arrivals', 'HomeController@new_arrivals')->name('new_arrivals');
Route::get('/on_sale', 'HomeController@on_sale')->name('on_sale');


// CART Route
Route::post('/add_to_cart' ,'CartController@add_to_cart')->name('add_to_cart');
Route::get('/get_cart_data' ,'CartController@get_cart_data')->name('get_cart_data');
Route::get('/order' ,'CartController@inquiry')->name('order');
Route::get('/cart' ,'CartController@cart')->name('cart');
Route::post('/checkout','CartController@checkout')->name('checkout');
Route::get('/removecart/{rowid}','CartController@removecart')->name('removecart');

Route::post('/add_review' ,'HomeController@add_review')->name('add_review');
Route::get('reviews' ,'AdminController@reviews')->name('reviews');
Route::DELETE('review/delete/{id}' , 'AdminController@delete')->name('review.destroy');
Route::get('change_status/{id}','AdminController@change_status')->name('change_status');

Route::get('/verifyorder/{id}/{phone}','CartController@verifyorder')->name('verifyorder');
Route::post('/verifyotp','CartController@verifyotp')->name('verifyotp');

Route::get('/sendotp/{phone}/{id}', 'CartController@sendotpagain')->name('sendotp');
Route::get('order_place/{id}','CartController@order_place')->name('order_place');
Route::get('/product/{slug}/{color}','HomeController@get_product')->name('product');
Route::post('admin/search','ProductController@admin_search')->name('admin_search');

Route::get('/products/{cat}/{slug}','HomeController@product_by_category')->name('products');

Route::post('/search','HomeController@search')->name('search');

Route::get('/admin/login','HomeController@admin_login')->name('admin.login');
Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
Route::get('admin/aboutus','AdminController@edit_aboutus')->name('admin.aboutus');
Route::PUT('about/update/{id}','AdminController@update')->name('about.update');

Route::get('/inquires','AdminController@inquires')->name('inquires');
Route::get('/inquires/details/{id}','AdminController@inquires_details')->name('inquires_details');
Route::get('/regenerate_pdf/{id}','AdminController@regenerate_pdf')->name('regenerate_pdf');
Route::PUT('updateinquiry/{id}','AdminController@updateinquiry')->name('updateinquiry');
Route::PUT('notify_customer/{id}','AdminController@notify_customer')->name('notify_customer');
Route::PUT('notify_cancelled/{id}','AdminController@notify_cancelled')->name('notify_cancelled');
Route::DELETE('del_inquiry/{id}','AdminController@del_inquiry')->name('del_inquiry');

Route::resource('admin/banners', 'BannerController');
Route::resource('admin/events', 'EventsController');
Route::resource('admin/categories', 'CategoryController');
Route::resource('admin/subcategories', 'subcategoryController');
Route::resource('admin/products', 'ProductController');
Route::resource('admin/vimeos', 'VimeoController');
Route::resource('admin/vimeos','VimeoController');
Route::resource('admin/media','MediaController');
Route::resource('admin/pages','PagesController');
Route::resource('admin/blogs','BlogController');
Route::resource('admin/coupons','CouponController');
Route::resource('admin/our-team', 'TeamController');
Route::resource('admin/our-departments', 'DepartmentController');
Route::post('/admin/upload','PagesController@upload')->name('pages.upload');



Route::DELETE('del_band_img/{id}','BrandController@del_band_img')->name('del_band_img');


Route::get('check_product_url/{slug}','ProductController@check_product_url')->name('check_product_url');
Route::get('check_product_code/{code}','ProductController@check_product_code')->name('check_product_code');
// Product Images routes
Route::get('products_images/{id}', 'ProductController@images')->name('products_images');
Route::post('add_img','ProductController@add_img')->name('add_img');
Route::DELETE('delimg/{id}/{pid}','ProductController@delimg')->name('delimg');
Route::get('editimg/{id}','ProductController@editimg')->name('editimg');
Route::PUT('updateimg/{id}','ProductController@updateimg')->name('updateimg');
//Options routes
Route::get('products_options/{id}','ProductController@products_options')->name('products_options');
Route::post('add_opt','ProductController@add_opt')->name('add_opt');
Route::DELETE('delopt/{id}','ProductController@delopt')->name('delopt');
Route::get('editopt/{id}','ProductController@editopt')->name('editopt');
Route::PUT('updateopt/{id}','ProductController@updateopt')->name('updateopt');
Route::get('change_opt/{id}','ProductController@change_opt')->name('change_opt');
Route::get('change_color/{id}','ProductController@change_color')->name('change_color');



Route::get('images/{image}/delete/{id}','ProductController@deleteimg')->name('deleteimg');

// =============
 
Route::get('/sub_category/{id}','CategoryController@sub_category')->name('sub_category');
Route::get('/sub_sub_category/{id}','CategoryController@sub_sub_category')->name('sub_sub_category');

Route::get('/view_sub_category/{id}','CategoryController@view_sub_category')->name('view_sub_category');
Route::get('/subcategory/edit/{id}','CategoryController@sub_category_edit')->name('subcategory.edit');
Route::PUT('/subcategory/update/{id}','CategoryController@subcategoryupdate')->name('subcategory.update');
Route::DELETE('/subcategory/delete/{id}','CategoryController@sub_category_del')->name('subcategory.destroy');
Route::POST('sort_category','CategoryController@sort_category')->name('sort_category');
Route::POST('sort_subcategory','subCategoryController@sort_subcategory')->name('sort_subcategory');

Route::POST('sort_brand','BrandController@sort_brand')->name('sort_brand');
Route::get('/product_by_subcategory/{id}','ProductController@product_by_subcategory')->name('product_by_subcategory');
Route::POST('sort_products','ProductController@sort_products')->name('sort_products');

Route::get('/importexport','ProductController@importexport')->name('importexport');
Route::get('/producttocopy/{id}','ProductController@producttocopy')->name('producttocopy');
Route::post('/exportprodcucts','ProductController@exportprodcucts')->name('exportprodcucts'); 
Route::POST('sort_img','ProductController@sort_img')->name('sort_img');


Route::POST('sort_banner','BannerController@sort_banner')->name('sort_banner');
Route::POST('sort_team','TeamController@sort_team')->name('sort_team');
Route::post('sort_department', 'DepartmentController@sort_department')->name('sort_department');
Route::POST('sort_media','VimeoController@sort_media')->name('sort_media');
Route::POST('sort_media_file','MediaController@sort_media_file')->name('sort_media_file');
Route::POST('sort_event','EventsController@sort_event')->name('sort_event');

Route::POST('sort_page','PagesController@sort_page')->name('sort_page');
Route::POST('sort_blog','PagesController@sort_blog')->name('sort_blog');
Route::POST('sort_coupon','PagesController@sort_coupon')->name('sort_coupon');


//------- Variation Routes-----------
Route::get('generate_variation/{product_id}','variationController@generate_variation')->name('generate_variation');
Route::get('refresh_variation/{product_id}','variationController@refresh_variation')->name('refresh_variation');
Route::post('update_variations','variationController@update_variations')->name('update_variations');

Auth::routes();


