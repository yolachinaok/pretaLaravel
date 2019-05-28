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
Route::get('/shop/{category_id}/{product_id}','ProductController@showProduct');
Route::get('/shop/{category_id}','ShopController@Metodoqueyoquiera');
Route::get('/shop','ShopController@showShop');
Route::get('/contacto','ContactController@showContact');
Route::get('/ayuda','HelpController@showHelp');
Route::get('/carrito','CartController@showCart');
Route::get('/registro',function(){
  return view('register');
});
Route::get('/login',function(){
  return view('login');
});
Route::get('/index','IndexController@showIndex');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
