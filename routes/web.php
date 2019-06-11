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

Route::delete('admin/productos/eliminar/{id}', 'ProductController@deleteProduct')->middleware('auth');
Route::post('admin/productos/editar/{id}', 'ProductController@updateProduct')->middleware('auth');
Route::get('admin/productos/editar/{id}', 'ProductController@editProduct')->middleware('auth');
Route::get('admin/productos', 'ProductController@createProduct')->middleware('auth')->middleware('auth');
Route::post('admin/productos', 'ProductController@createProductSave')->middleware('auth');


Route::get('/shop/{product_id}','ProductController@showProduct');

Route::get('/shop/{category_name}/{category_id}','ProductController@showCategory');
Route::get('/shop','ProductController@showShop');

Route::get('/contacto','ContactController@showContact');
Route::get('/ayuda','HelpController@showHelp');
Route::get('/carrito','CartController@showCart');

Route::get('/', 'IndexController@showIndex');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
