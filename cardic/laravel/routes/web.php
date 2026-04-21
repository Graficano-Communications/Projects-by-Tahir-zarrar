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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImgbanerController;
use App\Http\Controllers\RecordController;


Route::get('/', 'HomeController@index');
Route::get('test-ip','HomeController@test')->name('test');
Route::get('/contact-us', 'HomeController@comingSoon')->name('comingsoon');

Route::get('/pages/{id}','HomeController@pages')->name('pages');

Route::get('/feedback','HomeController@feedback')->name('feedback');
Route::get('/career','HomeController@career')->name('career');
Route::get('/new_arrival','HomeController@new_arrival')->name('new_arrival');
Route::get('/discover','HomeController@news_parallex')->name('news_parallex');
Route::get('/', 'HomeController@index');
Route::get('/home','HomeController@index');

Route::get('/about1', function () {
    return view('about');
});
Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/productpage', function () {
    return view('product');  
});

Route::get('/new-arrivals','HomeController@new_arrivals')->name('new_arrivals');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/CardicMedia','HomeController@CardicMedia')->name('CardicMedia');
Route::post('/SendMail','HomeController@SendMail')->name('SendMail');
Route::post('/SendcareerMail','HomeController@SendcareerMail')->name('SendcareerMail');
Route::post('/SendFeedbackMail','HomeController@SendFeedbackMail')->name('SendFeedbackMail');
/*Route::get('/about','HomeController@about')->name('about');*/
Route::get('/warrantiesandPolicies','HomeController@warranties')->name('warrantiesandPolicies');
Route::get('/InstrumentsCare','HomeController@InstrumentsCare')->name('InstrumentsCare');

Route::get('/news-and-events/{type}','HomeController@newsevents')->name('newsevents');
// Route::get('/news-and-events','HomeController@newsevents')->name('newsevents');

//Route::get('/category/{id}','HomeController@category')->name('category');
 Route::get('/{id}/{name}','HomeController@category')->name('category');

Route::get('/category-filter/{id}','HomeController@get_by_category')->name('category.filter');

Route::get('/about/{id}','HomeController@about')->name('about');
Route::get('/aboutusall','HomeController@aboutusall')->name('aboutusall');
Route::get('/new-arrival/products/{category}','HomeController@newarr')->name('new-arrival');
Route::get('/products/{id}/{slug}','HomeController@productsbycat')->name('products');
Route::get('/productsbycat/{id}','HomeController@productsbycat')->name('productsbycat');
Route::get('productbyid/{id}','HomeController@productbyid')->name('productbyid');
Route::get('/catalogue','HomeController@catlogue')->name('catlogue');
Route::get('/brouchers','HomeController@brochure')->name('brochures');
Route::post('/downloadcatalogue','HomeController@downloadcatlog')->name('downloadcatlog');
Route::get('/download' ,'HomeController@download');
Route::post('/add_to_cart' ,'HomeController@add_to_cart')->name('add_to_cart');
Route::get('/get_cart_data' ,'HomeController@get_cart_data')->name('get_cart_data');
Route::post('/search' ,'HomeController@search')->name('search');
Route::get('/inquiry' ,'HomeController@inquiry')->name('inquiry');
Route::get('/cart' ,'HomeController@cart')->name('cart');
Route::post('/checkout','HomeController@checkout')->name('checkout');
Route::get('/removecart/{rowid}','HomeController@removecart')->name('removecart');
Route::get('/privacy-policy', 'HomeController@privacyPolicy')->name('privacy_policy');
Route::get('/home', 'HomeController@index')->name('home');


// Route::get('productsbycat/{id}','HomeController@productsbycat')->name('productsbycat');

// Route::get('/admin', 'AdminController@admin')->middleware('is_admin')->name('admin');
Route::get('/cardic/admin/login/','HomeController@admin_login')->middleware('guest')->name('admin_login');
Route::get('/new_products','ProductsController@create')->name('new_products');
Route::post('/products/store', 'ProductsController@store');
Route::get('/admin/products/show','ProductsController@index')->name('productss'); 
Route::get('/product/{id}','ProductsController@show')->name('product');
Route::get('/product_edit/{pid}','ProductsController@edit')->name('product_edit');  
Route::put('/product/Update/{id}','ProductsController@update')->name('product_update'); 
Route::get('/del_img/{id}','ProductsController@del_img')->name('del_img'); 
Route::get('/del_product/{id}','ProductsController@destroy')->name('del_product'); 

Route::get('/importexport','ProductsController@importexport')->name('importexport');
Route::get('/producttocopy/{id}','ProductsController@producttocopy')->name('producttocopy'); 
    
Route::get('/admin', 'AdminController@dashboard');


Route::get('result', [ImgbanerController::class, 'view_result'])->name('result');
Route::get('image', [ImgbanerController::class, 'view_banner'])->name('pro-banners');
Route::get('add-banners', [ImgbanerController::class, 'add_banner'])->name('add-banner');
Route::post('add-banner-data', [ImgbanerController::class, 'add_banner_data'])->name('add-banner-data');
Route::get('/admin/edit-banners/{id}', [ImgbanerController::class, 'edit_banner'])->name('edit-banner');
Route::get('/admin/view-banners/{id}', [ImgbanerController::class, 'view_image_banner'])->name('view-banner');
Route::post('edit-banner-data/{id}', [ImgbanerController::class, 'edit_banner_data'])->name('edit-banner-data');
Route::delete('delete-banner/{id}', [ImgbanerController::class, 'delete_banner'])->name('delete-banner');


Route::get('/records/check/{id}', [RecordController::class, 'index'])->name('records.index');
Route::get('add-record', [RecordController::class, 'add_record'])->name('add-record');
Route::post('/save-record', [RecordController::class, 'store'])->name('save.record');
Route::get('/admin/edit-record/{id}', [RecordController::class, 'edit'])->name('edit.record');  // For Edit form
Route::put('/update-record/{id}', [RecordController::class, 'update'])->name('update.record');  // For Update record
Route::delete('/delete-record/{id}', [RecordController::class, 'destroy'])->name('delete.record');  // For Delete record





Route::get('/new_events', 'EventsController@create')->name('new_events');
Route::get('/eventss', 'EventsController@index')->name('eventss');
Route::post('/events/store','EventsController@store');
Route::get('/events/edit/{id}','EventsController@edit')->name('events_edit');
Route::put('/event/update/{id}','EventsController@update')->name('update_event');
Route::get('/del_event/{id}','EventsController@destroy')->name('del_event');

Route::get('admin/images/{image}/delete/{id}','EventsController@deleteimg')->name('deleteimg');




Route::get('/new_categories', 'CategoryController@create')->name('new_categories');
Route::post('/category/store','CategoryController@store');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('admin/category_edit/{id}','CategoryController@edit')->name('category_edit');
Route::get('/sub_category/{id}','CategoryController@sub_category')->name('sub_category');
Route::put('/category/update/{id}','CategoryController@update')->name('category_update');
Route::get('/del_cat/{id}','CategoryController@destroy')->name('del_cat');

Route::get('/new_about', 'AboutController@create')->name('new_about');
Route::post('/about/store','AboutController@store');
Route::get('/aboutus', 'AboutController@index')->name('aboutus'); 
Route::get('/aboutus/edit/{id}','AboutController@edit')->name('about_edit'); 
Route::put('/about/update/{id}','AboutController@update')->name('about_update');
Route::get('/del_pag/{id}','AboutController@destroy')->name('del_pag');
Route::get('admin/images/about/{image}/delete/{id}','AboutController@deleteimg')->name('deleteaboutimg');

Route::get('admin/view_subcat/{id}','CategoryController@view_subcat')->name('view_subcat');

// Route::get('/{id}/add_subcategory','AdminController@add_subcategory')->name('add_subcategory');
Route::get('admin/add_subcategory/{id}', 'CategoryController@addsubcat')->name('subcat_add');

Route::get('/del_subcat/{catid}/{id}','CategoryController@del_subcat')->name('del_subcat');
Route::get('/subcat_edit/{catid}/{id}','CategoryController@subcat_edit')->name('subcat_edit');
Route::put('/update_subcat/{id}','CategoryController@update_subcat')->name('update_subcat');
// Route::get('/new_subcategory/{id}','CategoryController@addsubcat')->name('addsubcat');
Route::post('/store_subcat','CategoryController@store_subcat')->name('store_subcat');

Route::get('/new_banner','BannerController@create')->name('new_banner');
Route::post('banner/store','BannerController@store')->name('banner_store');
Route::get('/banners','BannerController@index')->name('banners');
Route::get('/banners/edit/{id}','BannerController@edit')->name('banner_edit');
Route::put('/banner/update/{id}','BannerController@update')->name('banner_update');
Route::get('/del_banner/{id}','BannerController@destroy')->name('del_banner');


Route::get('/new_media','MediaController@create')->name('new_media');
Route::post('media/store','MediaController@store')->name('media_store');
Route::get('/medias','MediaController@index')->name('medias');
Route::get('/media_edit/{id}','MediaController@edit')->name('media_edit');
Route::put('/media/update/{id}','MediaController@update')->name('media_update');
Route::get('/del_media/{id}','MediaController@destroy')->name('del_media');

Route::get('/new_pdf','CatlougueController@create')->name('new_pdf');
Route::post('pdf/store','CatlougueController@store')->name('pdf_store');
Route::get('/pdfs','CatlougueController@index')->name('pdfs');
Route::get('/pdf/edit/{id}','CatlougueController@edit')->name('pdf_edit');
Route::put('/pdf/update/{id}','CatlougueController@update')->name('pdf_update');
Route::get('/del_pdf/{id}','CatlougueController@destroy')->name('del_pdf');

Route::get('/brochures','CatlougueController@brochure')->name('brochure');
Route::get('/new_brochure','CatlougueController@creation')->name('new_brochure');

// //new arrivals routes 
// Route::post('/pdf-download/{id}', 'HomeController@downloadPdf')->name('pdf.download');
// Route::get('download-pdf', 'HomeController@initiateDownload')->name('initiate.pdf.download');

// Route::post('/pdf-display/{id}', 'HomeController@downloadPdf')->name('pdf.display');

Route::post('/new-arrival/download-pdf/{id}', 'HomeController@downloadPdf')->name('downloadPdf');


Route::get('new_arrival/new_products','NewarrivalController@create')->name('new_arrival.new_products');
Route::post('new_arrival/products/store', 'NewarrivalController@store')->name('new_arrival.store');
Route::get('new_arrival/admin/product/show','NewarrivalController@index')->name('new_arrival.productss'); 
Route::get('new_arrival/product/{id}','NewarrivalController@show')->name('new_arrival.product');
Route::get('new_arrival/product_edit/{pid}','NewarrivalController@edit')->name('new_arrival.product_edit');  
Route::put('new_arrival/product/Update/{id}','NewarrivalController@update')->name('new_arrival.product_update'); 
Route::get('new_arrival/del_img/{id}','NewarrivalController@del_img')->name('new_arrival.del_img'); 
Route::get('new_arrival/del_product/{id}','NewarrivalController@destroy')->name('new_arrival.del_product');

Route::get('new_arrival/view_images/{id}','NewarrivalController@view_images')->name('new_arrival.view_images');
Route::get('new_arrival/edit_images/{id}','NewarrivalController@edit_images')->name('new_arrival.product_image_edit');
Route::put('new_arrival/update_images/{id}','NewarrivalController@update_images')->name('new_arrival.update_images');
Route::get('new_arrival/del_images/{id}','NewarrivalController@del_images')->name('new_arrival.del_image_');

Route::POST('sort_new_arrival','NewarrivalController@sort_new_arrival')->name('sort_new_arrival');
Route::POST('sort_new_arrival_images','NewarrivalController@sort_new_arrival_images')->name('sort_new_arrival_images');


Route::get('/product_by_subcategory/{id}','ProductsController@product_by_subcategory')->name('product_by_subcategory');
Route::POST('sort_banner','BannerController@sort_banner')->name('sort_banner');
Route::POST('sort_category','CategoryController@sort_category')->name('sort_category');
Route::POST('sort_about','AboutController@sort_about')->name('sort_about');
Route::POST('sort_subcategory','CategoryController@sort_subcategory')->name('sort_subcategory');
Route::POST('sort_products','ProductsController@sort_products')->name('sort_products');
Route::POST('sort_catlog','CatlogController@sort_catlog')->name('sort_catlog');
Route::POST('sort_compliance','CompliancesController@sort_compliance')->name('sort_compliance');
Route::POST('sort_media','MediaController@sort_media')->name('sort_media');
Route::POST('sort_event','EventsController@sort_event')->name('sort_event');

// News Banner Routes
Route::get('/admin/news', 'NewsBannerController@index')->name('admin.news.index');
Route::get('/admin/news/{id}/edit', 'NewsBannerController@edit')->name('admin.news.edit');
Route::delete('/admin/news/{id}', 'NewsBannerController@destroy')->name('admin.news.destroy');
Route::post('/admin/news/sort', 'NewsBannerController@sort')->name('sort');
Route::put('/admin/news/{id}', 'NewsBannerController@update')->name('admin.news.update');


Route::get('/new_news_banner', 'NewsBannerController@create')->name('new_news_banner');
Route::post('/news_banner/store', 'NewsBannerController@store')->name('news_banner.store');
Route::get('/news_banners', 'NewsBannerController@index')->name('news_banners'); 
Route::get('/news_banner/{id}', 'NewsBannerController@show')->name('news_banner');
  
Route::put('/news_banner/update/{id}', 'NewsBannerController@update')->name('news_banner_update'); 

// Display a listing of the resource
Route::get('/instagram', 'InstagramController@index')->name('instagram.index');

// Show the form for creating a new resource
Route::get('/admin/instagram/create', 'InstagramController@create')->name('instagram.create');

// Store a newly created resource in storage
Route::post('/admin/instagram/store', 'InstagramController@store')->name('instagram.store');

// Display the specified resource
Route::get('/show/instagram/{id}', 'InstagramController@show')->name('instagram.show');

// Show the form for editing the specified resource
Route::get('/instagram/{id}/edit', 'InstagramController@edit')->name('instagram.edit');

// Update the specified resource in storage
Route::put('/update/instagram/{id}', 'InstagramController@update')->name('instagram.update');

// Remove the specified resource from storage
Route::delete('/delete/instagram/{id}', 'InstagramController@destroy')->name('instagram.destroy');

Route::POST('sort_instagram','InstagramController@sort_insta')->name('sort_insta');
 
Auth::routes();


