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
Route::get('/producthome',function(){
    return view('products');
});
Route::get('/services',function(){
    return view('services');
});
Route::get('/contacts',function(){
    return view('contacts');
});
Route::get('/homee',function (){
 return view('welcome');
});



// Route::get('/custreg_operator',function (){
//  return view('Binuri.custreg_operator');
// });


Route::get('/buydetails_products',function (){
 return view('Binuri.buydetails_products');
});





Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'AdminController@index')->name('admin');
//Route::match(['get','post'],'/usersave', 'AdminregController@index')->name('usersave');

//Route::resource('registeroperator','AdminregisterController');
Route::resource('complains','ComplainsController');
Route::resource('customercomplain','CustomercomplainController');
Route::resource('customerprofile','CustomerprofileController');
//Route::post('/complains/get_zones','ComplainsController@get_zones');
Route::resource('addproducts','AddproductController');
Route::resource('products','ProductController');
Route::resource('technicians','TechnicianController');
Route::resource('technicianjobs','TechnicianjobController');
Route::resource('/custreg_operator','CustRegOperatorController');
// Route::post('custreg_operator/store','CustRegOperatorController@store');

// Route::resource('customerregister','CustRegOperatorController');

Route::post('complains/fetch','ComplainsController@fetch')->name('complains.fetch');


Route::group(['middleware' => 'disablepreventback'],function(){
	Auth::routes();
    Route::get('/home', 'HomeController@index');
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::match(['get','post'],'/regoperator', 'AdminregController@usersave')->name('regoperator');
    Route::resource('complains','ComplainsController');
    Route::resource('addproducts','AddproductController');
    Route::resource('products','ProductController');
    
});
 