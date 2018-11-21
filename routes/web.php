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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products',function(){
    return view('produts');
});
Route::get('/services',function(){
    return view('services');
});
Route::get('/contacts',function(){
    return view('contacts');
});
Route::get('/home',function (){
 return view('welcome');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::match(['get','post'],'/usersave', 'AdminregController@index')->name('usersave');

Route::resource('registeroperator','AdminregisterController');
Route::resource('complains','ComplainsController');
Route::resource('addproducts','AddproductController');
Route::resource('products','ProductController');
Route::resource('technicians','TechnicianregisterController');
//Route::get('registeroperator/create','AdminregisterController@create');
//Route::post('registeroperator','AdminregisterController@store');


Route::group(['middleware' => 'disablepreventback'],function(){
	Auth::routes();
    Route::get('/home', 'HomeController@index');
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::match(['get','post'],'/regoperator', 'AdminregController@usersave')->name('regoperator');
    Route::resource('complains','ComplainsController');
    Route::resource('addproducts','AddproductController');
    Route::resource('products','ProductController');
    
});
 