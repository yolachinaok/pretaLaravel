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
//Route::get('admin/productos', 'AdminController@products'); //no creado aun
Route::get('/', 'IndexController@showIndex');
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop/{product_id}','ProductController@showProduct');
// Route::get('/shop/{category_name}/{category_id}/{page}','ProductController@showCategory');
Route::get('/shop/{category_name}/{category_id}','ProductController@showCategory');
Route::get('/shop','ProductController@showShop');
Route::get('/productAdmin','ProductController@showProductAdmin');
Route::get('/contacto','ContactController@showContact');
Route::get('/ayuda','HelpController@showHelp');
Route::get('/carrito','CartController@showCart');
Route::get('/registro',function(){
  return view('register');
});
Route::get('/login',function(){
  return view('login');
});






Auth::routes();
