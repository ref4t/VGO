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

Route::get('/', function () {
    return view('bikeArena.index');
});
Route::get('/vgo','HomeController@vgo')->name('index.vgo');

//Route::get('/bikearena','FrontEnd\BikeArenaController@index')->name('bikearena.index');
//Route::get('/bikearena/specification/{name}','bikesController@specification')->name('bikearena.specification');
//Route::get('/bikearena/specification/{name}','bikesController@specification')->name('bikearena.specification');
//Route::get('/bikearena/specification/{name}','bikesController@specification')->name('bikearena.specification');
//Route::get('/bikearena/specification/{name}','bikesController@specification')->name('bikearena.specification');


//Route::get('/{brand}','bikesController@brands')->name('bikearena.brands');
