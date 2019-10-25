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

Route::get('/admin', 'adminController@index')->name('admin.dashboard');
Route::get('/admin/viewbikes', 'adminController@viewbikes')->name('admin.viewbikes');

Route::get('/admin/addbike', 'adminController@addbike')->name('admin.addbike');
Route::post('/admin/addbike', 'bikesController@storebike')->name('admin.storebike');

Route::get('/admin/editbike/{id}','adminController@editbike')->name('admin.editbike');
Route::post('/admin/editbike/{id}','bikesController@update')->name('admin.updatebike');

Route::get('/vgo','HomeController@vgo')->name('index.vgo');

Route::get('bike-Arena','FrontEnd\BikeArenaController@index')->name('bikearena.index');
Route::get('bike-Arena/about-us','FrontEnd\BikeArenaController@about')->name('bikearena.about');
Route::get('bike-Arena/blog','FrontEnd\BikeArenaController@blog')->name('bikearena.blog');
Route::get('bike-Arena/blog-details','FrontEnd\BikeArenaController@blogdetails')->name('bikearena.blog-details');
Route::get('bike-Arena/cart','FrontEnd\BikeArenaController@cart')->name('bikearena.cart');
Route::get('bike-Arena/checkout','FrontEnd\BikeArenaController@checkout')->name('bikearena.checkout');
Route::get('bike-Arena/contact','FrontEnd\BikeArenaController@contact')->name('bikearena.contact');
Route::get('bike-Arena/login-register','FrontEnd\BikeArenaController@loginregister')->name('bikearena.login-register');
Route::get('bike-Arena/product-details','FrontEnd\BikeArenaController@productdetails')->name('bikearena.product-details');
Route::get('bike-Arena/shop','FrontEnd\BikeArenaController@shop')->name('bikearena.shop');
Route::get('bike-Arena/wishlist','FrontEnd\BikeArenaController@wishlist')->name('bikearena.wishlist');
