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

//Route::get('/', 'HomeController@index')->name('home.index');

Auth::routes();

Route::get('viewbikes/getItems',[
    'uses' => 'adminController@viewbikesitems'
]);

Route::get('/admin', 'adminController@index')->name('admin.dashboard');
Route::get('/admin/viewbikes', 'adminController@viewbikes')->name('admin.viewbikes');

Route::get('/admin/addbike', 'adminController@addbike')->name('admin.addbike');
Route::post('/admin/addbike', 'bikesController@storebike')->name('admin.storebike');

Route::get('/admin/editbike/{id}','adminController@editbike')->name('admin.editbike');
Route::post('/admin/editbike/{id}','bikesController@update')->name('admin.updatebike');

Route::get('/vgo','HomeController@vgo')->name('index.vgo');

Route::get('bike-Arena/login','FrontEnd\BikeArenaController@login')->name('bikearena.login');
Route::get('bike-Arena','FrontEnd\BikeArenaController@index')->name('bikearena.index');
Route::get('bike-Arena/about-us','FrontEnd\BikeArenaController@about')->name('bikearena.about');
Route::get('bike-Arena/blog','FrontEnd\BikeArenaController@blog')->name('bikearena.blog');
Route::get('bike-Arena/blog-details','FrontEnd\BikeArenaController@blogdetails')->name('bikearena.blog-details');
Route::get('bike-Arena/cart','FrontEnd\BikeArenaController@cart')->name('bikearena.cart');
Route::get('bike-Arena/checkout','FrontEnd\BikeArenaController@checkout')->name('bikearena.checkout');
Route::get('bike-Arena/contact','FrontEnd\BikeArenaController@contact')->name('bikearena.contact');
Route::get('bike-Arena/login-register','FrontEnd\BikeArenaController@loginregister')->name('bikearena.login-register');
Route::get('bike-Arena/shop','FrontEnd\BikeArenaController@shop')->name('bikearena.shop');
Route::get('bike-Arena/wishlist','FrontEnd\BikeArenaController@wishlist')->name('bikearena.wishlist');
//Route::get('/getItems','adminController@viewbikesitems')->name('viewbikes.table');

Route::get('bike-Arena/product-details','FrontEnd\BikeArenaController@productdetails')->name('bikeArena.product-details');
Route::get('bike-Arena/brand-details','FrontEnd\BikeArenaController@brandDetails')->name('bikeArena.brand-details');
Route::get('bike-Arena/part-details','FrontEnd\BikeArenaController@partDetails')->name('bikeArena.part-details');

Route::get('bike-Arena/brand-details/{name}','FrontEnd\BikeArenaController@viewBrand')->name('bikeArena.viewBrands');
Route::get('bike-Arena/brands/','FrontEnd\BikeArenaController@allBrand')->name('bikeArena.allBrands');
Route::get('bike-Arena/part-details/{name}','FrontEnd\BikeArenaController@viewParts')->name('bikeArena.viewParts');
Route::get('bike-Arena/parts/','FrontEnd\BikeArenaController@allParts')->name('bikeArena.allParts');
//$this->get('users/data-table', 'adminController@getUsersForDataTable')->name('users.table');

Route::get('admin/view-parts','partsController@viewpart')->name('parts.view');
Route::get('admin/add-parts','partsController@addpart')->name('parts.add');
Route::post('admin/add-parts','partsController@storeparts')->name('parts.store');
Route::get('/admin/edit-parts/{id}','partsController@editpart')->name('part.edit');
Route::post('/admin/edit-parts/{id}','partsController@updatepart')->name('part.update');

Route::get('admin/view-parts-category','partsController@viewpartcategory')->name('parts.viewcategory');
Route::get('admin/add-parts-category','partsController@addpartcategory')->name('parts.addcategory');
Route::post('admin/add-parts-category','partsController@storepartscategory')->name('parts.storecategory');
Route::get('/admin/edit-parts-category/{id}','partsController@editpartcategory')->name('part.editcategory');
Route::post('/admin/edit-parts-category/{id}','partsController@updatepartcategory')->name('part.updatecategory');

Route::get('admin/view-blog','blogController@index')->name('blog.view');
Route::get('admin/add-blog','blogController@create')->name('blog.add');
Route::post('admin/add-blog','blogController@store')->name('blog.store');

Route::get('admin/view-bike-brand','bikesController@showBikeBrands')->name('bikeBrands.view');
Route::get('admin/add-bike-brand','bikesController@addBikesBrand')->name('bikeBrands.add');
Route::post('admin/add-bike-brand','bikesController@storeBikesBrand')->name('bikeBrands.store');
Route::get('/admin/edit-bike-brand/{id}','bikesController@editBikesBrand')->name('bikeBrands.edit');
Route::post('/admin/edit-bike-brand/{id}','bikesController@updateBikesBrand')->name('bikeBrands.update');
