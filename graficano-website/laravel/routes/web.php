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

use App\Http\Controllers\FrontController;


Route::get('/','FrontController@index')->name('index');
Route::get('/portfolios/all','FrontController@all_portfolios')->name('all_portfolios');
Route::get('/portfolios/{service}','FrontController@frontportfolios')->name('frontportfolios');
Route::get('/about-us','FrontController@about')->name('about');
Route::get('/our-team','FrontController@team')->name('team');
Route::get('/events','FrontController@events')->name('events');
Route::get('/job-opportunities','FrontController@hiring')->name('hiring_jobs');
Route::get('/job-opportunities/{job_title}','FrontController@hiring_form')->name('hiring_form');
Route::post('/job-opportunities/application/submit','FrontController@hiring_form_submit')->name('hiring_form_submit');
Route::get('/getqoute','FrontController@getqoute')->name('getqoute');
Route::get('/customer-policy','FrontController@customer_policy')->name('customer-policy');
Route::get('/work-policy','FrontController@work_policy')->name('work-policy');
Route::get('/change-management','FrontController@change_management')->name('change-management');

Route::get('/projects/create', 'ProjectController@create')->name('projects.create');
Route::post('/submit-review', [FrontController::class, 'review'])->name('review.store');
Route::get('/portfolio/reviews', 'FrontController@portfolio_reviews')->name('portfolios.reviews');
Route::post('/review/update-status', [FrontController::class, 'updateStatus'])->name('review.updateStatus');


// Route::get('/services','FrontController@services')->name('services');
//  Route::get('/multimedia','FrontController@multimedia')->name('multimedia');
// Route::get('/content-writing','FrontController@content')->name('content');
// Route::get('/design-and-illustration','FrontController@design')->name('design');
// Route::get('/printing','FrontController@printing')->name('printing');
// Route::get('/web-and-digital','FrontController@web')->name('web');
// Route::get('/digital-marketing','FrontController@digitalMarketing')->name('digitalMarketing');
// Route::get('/social-media-marketing','FrontController@smm')->name('smm');
//servies routes starts
// design&illustration
// Route::get('/design-illustration-service/design-publication','FrontController@design_publication')->name('design_publication');
// Route::get('/design-illustration-service/icon-illustrations','FrontController@icon_illustrations')->name('icon_illustrations');
// Route::get('/design-illustration-service/label-packing','FrontController@label_packing')->name('label_packing');
// Route::get('/design-illustration-service/layout-design','FrontController@layout_design')->name('layout_design');
// Route::get('/design-illustration-service/logo-design','FrontController@logo_design')->name('logo_design');
// digitalMarketing
// Route::get('/digital-marketing-service/amazon-seo-services','FrontController@amazone_seo')->name('amazone_seo');
// Route::get('/digital-marketing-service/international-seo-services','FrontController@international_seo')->name('international_seo');
// Route::get('/digital-marketing-service/local-seo-services','FrontController@local_seo')->name('local_seo');
// Route::get('/digital-marketing-service/offpage-seo-services','FrontController@offpage_seo')->name('offpage_seo');
// Route::get('/digital-marketing-service/onpage-seo-services','FrontController@onpage_seo')->name('onpage_seo');
// Route::get('/digital-marketing-service/ppc-adds-services','FrontController@ppc_adds')->name('ppc_adds');
// Route::get('/digital-marketing-service/technical-seo','FrontController@technical_seo')->name('technical_seo');
// Route::get('/digital-marketing-service/search-engine-optimization-seo','FrontController@seo')->name('seo');
// SMM social Media marketing 
// Route::get('social-media-marketing-services/social-media-advertisement','FrontController@social_advertisement')->name('social_advertisement');
// Route::get('social-media-marketing-services/brand-management','FrontController@brand_mgt')->name('brand_mgt');
// Route::get('social-media-marketing-services/email-markting','FrontController@email_markting')->name('email_markting');
// printing_packing
// Route::get('printing-packing-services/screen-printing','FrontController@screen_printing')->name('screen_printing');
// Route::get('printing-packing-services/digital-printing','FrontController@digital_printing')->name('digital_printing');
// Route::get('printing-packing-services/led-uv','FrontController@led_uv')->name('led_uv');
// Route::get('printing-packing-services/flexography','FrontController@flexography')->name('flexography');
// Route::get('printing-packing-services/large-farmat','FrontController@large_farmat')->name('large_farmat');
// Route::get('printing-packing-services/offset-printing','FrontController@offset_printing')->name('offset_printing');
// web developments 
// Route::get('web-developments-services/custom-web-website-design','FrontController@custom_web')->name('custom_web');
// Route::get('web-developments-services/ecommerace-website-design','FrontController@ecommerace')->name('ecommerace');
// Route::get('web-developments-services/mobile-app-website-design','FrontController@mobile_app')->name('mobile_app');
// Route::get('web-developments-services/shopify-website-design','FrontController@shopify')->name('shopify');
// Route::get('web-developments-services/web-hoisting-website-design','FrontController@web_hoisting')->name('web_hoisting');
// Route::get('web-developments-services/wordpress-website-design','FrontController@wordpress')->name('wordpress');
// video_photography
// Route::get('video&photography-services/a_plus_content','FrontController@a_plus_content')->name('a_plus_content');
// Route::get('video&photography-services/animation-video','FrontController@animation_video')->name('animation_video');
// Route::get('video&photography-services/documentries','FrontController@documentries')->name('documentries');
// Route::get('video&photography-services/drone','FrontController@drone')->name('drone');
// Route::get('video&photography-services/event-mgt','FrontController@event_mgt')->name('event_mgt');
// Route::get('video&photography-services/product-commercial','FrontController@product_commercial')->name('product_commercial');
// Route::get('video&photography-services/product-shoot','FrontController@product_shoot')->name('product_shoot');
// Route::get('video&photography-services/studio-sound','FrontController@studio_sound')->name('studio_sound');
//servies routes ends
Route::post('/send_quiry','FrontController@send_quiry')->name('send_quiry');
Route::get('/pricing/{type}','FrontController@pricing')->name('pricing');
Route::post('/unlock-pricing','FrontController@unlock_pricing')->name('unlock_pricing');
Route::get('/contact-us','FrontController@contact')->name('contact');
Route::get('/blogs','FrontController@blogs')->name('blogs.home');
Route::get('/blog/{slug}','FrontController@blog_details')->name('blog.details');
Route::get('/clients','FrontController@clients')->name('clients');
Route::get('/portfolio/{url}','FrontController@details_portfolios')->name('details_portfolios');
Route::get('/team', 'TeamMemberController@index')->name('team.index');
Route::get('/team', 'TeamMemberController@showTeamPage');
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::group([
    'prefix' => 'admin/portfolios',
], function () {
    Route::get('/', 'PortfoliosController@index')
         ->name('portfolios.portfolio.index');
    Route::get('/create','PortfoliosController@create')
         ->name('portfolios.portfolio.create');
    Route::get('/show/{portfolio}','PortfoliosController@show')
         ->name('portfolios.portfolio.show');
    Route::get('/{portfolio}/edit','PortfoliosController@edit')
         ->name('portfolios.portfolio.edit');
    Route::post('/', 'PortfoliosController@store')
         ->name('portfolios.portfolio.store');
    Route::put('portfolio/{portfolio}', 'PortfoliosController@update')
         ->name('portfolios.portfolio.update');
    Route::delete('/portfolio/{portfolio}','PortfoliosController@destroy')
         ->name('portfolios.portfolio.destroy');
});

Route::group([
    'prefix' => 'admin/clients',
], function () {
    Route::get('/', 'ClientsController@index')
         ->name('clients.client.index');
    Route::get('/create','ClientsController@create')
         ->name('clients.client.create');
    Route::get('/show/{client}','ClientsController@show')
         ->name('clients.client.show');
    Route::get('/{client}/edit','ClientsController@edit')
         ->name('clients.client.edit');
    Route::post('/', 'ClientsController@store')
         ->name('clients.client.store');
    Route::put('client/{client}', 'ClientsController@update')
         ->name('clients.client.update');
    Route::delete('/client/{client}','ClientsController@destroy')
         ->name('clients.client.destroy');
});

Route::group([
    'prefix' => 'media',
], function () {
    Route::get('/{portfolio_id}', 'MediaController@index')
         ->name('media.media.index');
    Route::get('/create/{portfolio_id}','MediaController@create')
         ->name('media.media.create');
    Route::get('/show/{media}','MediaController@show')
         ->name('media.media.show');
    Route::get('/{media}/edit/{portfolio_id}','MediaController@edit')
         ->name('media.media.edit');
    Route::post('/', 'MediaController@store')
         ->name('media.media.store');
    Route::put('media/{media}', 'MediaController@update')
         ->name('media.media.update');
    Route::delete('/media/{media}','MediaController@destroy')
         ->name('media.media.destroy');
});
 
Route::POST('add_thumbnail','MediaController@add_thumbnail')->name('add_thumbnail'); 
Route::POST('add_updown_images','MediaController@add_updown_images')->name('add_updown_images');
Route::POST('add_slider','MediaController@add_slider')->name('add_slider');
Route::POST('add_vimeo','MediaController@add_vimeo')->name('add_vimeo');

Route::get('set_thumbnail/{id}','MediaController@set_thumbnail')->name('set_thumbnail');
Route::POST('sort_client','ClientsController@sort_client')->name('sort_client');
Route::post('/sort', 'InstaController@sort')->name('instagram.instagram.sort');
Route::post('/sort-team', 'TeamMemberController@sort')->name('team.sort');

Route::get('portfolio_by_category/{service}','PortfoliosController@portfolio_by_category')->name('portfolio_by_category');
Route::POST('sort_portfolio','PortfoliosController@sort_portfolio')->name('sort_portfolio');
Route::POST('sort_banners','BannerController@sort_banners')->name('sort_banners');

Route::POST('sort_media','MediaController@sort_media')->name('sort_media');
Route::POST('sort_blog','BlogsController@sort_blog')->name('sort_blog');
Route::POST('sort_service','ServicesController@sort_service')->name('sort_service');
Route::post('/admin/upload','BlogsController@upload')->name('pages.upload');
Route::POST('sort_service','DepartmentController@sort_service')->name('sort_service');


Route::group([
    'prefix' => 'admin/blogs',
], function () {
    Route::get('/', 'BlogsController@index')
         ->name('blogs.blog.index');
    Route::get('/create','BlogsController@create')
         ->name('blogs.blog.create');
    Route::get('/show/{blog}','BlogsController@show')
         ->name('blogs.blog.show');
    Route::get('/{blog}/edit','BlogsController@edit')
         ->name('blogs.blog.edit');
    Route::post('/', 'BlogsController@store')
         ->name('blogs.blog.store');
    Route::put('blog/{blog}', 'BlogsController@update')
         ->name('blogs.blog.update');
    Route::delete('/blog/{blog}','BlogsController@destroy')
         ->name('blogs.blog.destroy');
});
//careers
Route::group([
     'prefix' => 'admin/career',
 ], function () {
     Route::get('/', 'careerController@index')
          ->name('career.index');
     Route::get('/create','careerController@create')
          ->name('career.create');
     Route::get('/show/{blog}','careerController@show')
          ->name('career.show');
     Route::get('/{blog}/edit','careerController@edit')
          ->name('career.edit');
     Route::post('/', 'careerController@store')
          ->name('career.store');
     Route::put('blog/{blog}', 'careerController@update')
          ->name('career.update');
     Route::delete('/blog/{blog}','careerController@destroy')
          ->name('career.destroy');
 });
 Route::POST('sort_careers','careerController@sort_careers')->name('sort_careers');
 //careers end
Route::group([
     'prefix' => 'admin/banners',
 ], function () {
     Route::get('/', 'BannerController@index')
          ->name('banner.banner.index');
     Route::get('/create','BannerController@create')
          ->name('banner.banner.create');
     Route::get('/show/{blog}','BannerController@show')
          ->name('banner.banner.show');
     Route::get('/{blog}/edit','BannerController@edit')
          ->name('banner.banner.edit');
     Route::post('/', 'BannerController@store')
          ->name('banner.banner.store');
     Route::put('blog/{blog}', 'BannerController@update')
          ->name('banner.banner.update');
     Route::delete('/blog/{blog}','BannerController@destroy')
          ->name('banner.banner.destroy');
 });

Route::group([
    'prefix' => 'admin/services',
], function () {
    Route::get('/', 'ServicesController@index')
         ->name('services.services.index');
    Route::get('/create','ServicesController@create')
         ->name('services.services.create');
    Route::get('/show/{services}','ServicesController@show')
         ->name('services.services.show');
    Route::get('/{services}/edit','ServicesController@edit')
         ->name('services.services.edit');
    Route::post('/', 'ServicesController@store')
         ->name('services.services.store');
    Route::put('services/{services}', 'ServicesController@update')
         ->name('services.services.update');
    Route::delete('/services/{services}','ServicesController@destroy')
         ->name('services.services.destroy');
});

Route::group([
    'prefix' => 'admin/events',
], function () {
    Route::get('/', 'EventsController@index')
         ->name('events.event.index');
    Route::get('/create','EventsController@create')
         ->name('events.event.create');
    Route::get('/show/{event}','EventsController@show')
         ->name('events.event.show');
    Route::get('/{event}/edit','EventsController@edit')
         ->name('events.event.edit');
    Route::post('/', 'EventsController@store')
         ->name('events.event.store');
    Route::put('event/{event}', 'EventsController@update')
         ->name('events.event.update');
    Route::delete('/event/{event}','EventsController@destroy')
         ->name('events.event.destroy');
});
Route::group([
     'prefix' => 'admin/instagram',
], function () {
     Route::get('/', 'InstaController@index')
          ->name('instagram.instagram.index');
     Route::get('/create', 'InstaController@create')
          ->name('instagram.instagram.create');
     Route::get('/{instagram}/edit', 'InstaController@edit')
          ->name('instagram.instagram.edit');
     Route::post('/', 'InstaController@store')
          ->name('instagram.instagram.store');
     Route::put('{instagram}', 'InstaController@update')
      ->name('instagram.instagram.update');
     Route::delete('/delete/{instagram}', 'InstaController@destroy')
          ->name('instagram.instagram.destroy');
});

Route::group([
     'prefix' => 'admin/team',
], function () {
     Route::get('/', 'TeamMemberController@index')
          ->name('teams.index');
     Route::get('/create', 'TeamMemberController@create')
          ->name('teams.create');
     Route::post('/', 'TeamMemberController@store')
          ->name('teams.store');
     Route::delete('/team/{teamMember}', 'TeamMemberController@destroy')
          ->name('team.destroy');
     Route::get('/{teamMember}/edit', 'TeamMemberController@edit')
          ->name('team.edit');
     Route::put('/team/{teamMember}', 'TeamMemberController@update')
          ->name('team.update');
});

Route::group([
     'prefix' => 'admin/Services',
], function () {
     Route::get('/', 'DepartmentController@index')
          ->name('department.department.index');
     Route::get('/create', 'DepartmentController@create')
          ->name('department.department.create');
     Route::get('/{department}/edit', 'DepartmentController@edit')
          ->name('department.department.edit');
     Route::post('/', 'DepartmentController@store')
          ->name('department.department.store');
     Route::put('admin/Services/{department}/update', 'DepartmentController@update')
     ->name('department.department.update');

     Route::delete('/delete/{department}', 'DepartmentController@destroy')
          ->name('department.department.destroy');
     Route::get('/{department}/project/create', 'ProjectController@create')
          ->name('department.department.project');
});

Route::get('admin/create-service', 'DepartmentController@Create_service')->name('create-service');
Route::post('admin/add-service', 'DepartmentController@addservice')->name('add_service');
Route::get('admin/all-service', 'DepartmentController@Allservices')->name('all-services');
Route::get('admin/edit-service/{id}', 'DepartmentController@Edit_service')->name('edit-service');
Route::post('admin/update-service/{id}', 'DepartmentController@updateService')->name('update_service');
Route::delete('admin/service/{id}', 'DepartmentController@destroyservice')->name('service.destroy');
Route::post('/services/update-order', 'DepartmentController@updateOrder')->name('services.updateOrder');


Route::get('admin/sub-service/create', 'DepartmentController@Create_subservice')->name('sub-service.create');
Route::post('admin/sub-service/store', 'DepartmentController@store_subservice')->name('sub-service.store');
Route::get('admin/all-sub-service', 'DepartmentController@All_subservices')->name('all-sub-services');
Route::get('admin/sub-service/{id}/edit', 'DepartmentController@edit_subservice')->name('sub-service.edit');
Route::post('admin/sub-service/{id}/update', 'DepartmentController@update_subservice')->name('sub-service.update');
Route::delete('admin/sub-service/{id}', 'DepartmentController@destroysubservice')->name('sub-service.destroy');


Route::get('service/{slug}', 'FrontController@show1')->name('service.show');
// Route::get('sub-service/{slug}', 'FrontController@show2')->name('sub-service.show');
Route::get('/{serviceSlug}/{subServiceSlug}', 'FrontController@show2')->name('sub-service.show');





Route::post('/projects/store', 'ProjectController@store')->name('projects.store');
Route::get('/projects/{id}/edit', 'ProjectController@edit')->name('projects.edit');
Route::delete('/projects/{id}', 'ProjectController@destroy')->name('projects.destroy');
Route::put('/projects/{project}', 'ProjectController@update')->name('projects.update');

//production Order
Route::group([
     'prefix' => 'admin/production_order',
 ], function () {
     Route::get('/', 'Production_orderController@index')
          ->name('production_order.index');
     Route::get('/create','Production_orderController@create')
          ->name('production_order.create');
     Route::get('/show/{blog}','Production_orderController@show')
          ->name('production_order.show');
     Route::get('/{blog}/edit','Production_orderController@edit')
          ->name('production_order.edit');
     Route::post('/', 'Production_orderController@store')
          ->name('production_order.store');
     Route::put('blog/{blog}', 'Production_orderController@update')
          ->name('production_order.update');
     Route::delete('/blog/{blog}','Production_orderController@destroy')
          ->name('production_order.destroy');
 });

 




Route::DELETE('del_event_img/{image}/{id}','EventsController@del_event_img')->name('del_event_img');