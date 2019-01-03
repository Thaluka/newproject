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

Route::get('/binuri',function (){
 return view('binuri');
});

Route::get('/operator',function (){
 return view('operator.index_operator');
});


Route::get('/supervisor',function (){
 return view('supervisor.sup_index');
});

Route::get('/customer',function (){
 return view('customer.index_customer');
});

Route::get('/manager',function (){
return view('manager.index_manager');
});






// Route::get('/custreg_operator',function (){
//  return view('Binuri.custreg_operator');
// });


// Route::get('/buydetails_products',function (){
//  return view('operator.buydetails_products');
// });

Route::get('/jobreq_operator',function (){
 return view('operator.jobreq_operator');
});



// Route::get('/index_operator',function (){
//  return view('operator.index_operator');
// });










Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'AdminController@index')->name('admin');
//Route::match(['get','post'],'/usersave', 'AdminregController@index')->name('usersave');


Route::get('/viewassign', 'AssignviewController@viewassign')->name('home');
Route::get('/viewcompleted', 'AssignviewController@viewcompleted')->name('home');

// Route::resource('viewhold', 'HoldComplaintController')->name('home');
// Route::get('/viewhold', 'AssignviewController@viewhold')->name('home');

Route::get('/viewrejected', 'AssignviewController@viewrejected')->name('home');
Route::resource('/viewhold', 'HoldComplaintController');


//MANAGER VIEWS
Route::get('/viewcomplains', 'ManagerViewController@complaintview');
Route::get('/viewcustomers', 'ManagerViewController@customerview');
Route::get('/viewoperators', 'ManagerViewController@operatorview');
Route::get('/viewsupervisors', 'ManagerViewController@supervisorview');
Route::get('/viewtechnicians', 'ManagerViewController@technicianview');
Route::get('/viewproducts', 'ManagerViewController@productsview');
Route::get('/viewusers', 'ManagerViewController@userview');

















//Route::resource('registeroperator','AdminregisterController');
Route::resource('complains','ComplainsController');



Route::resource('customercomplain','CustomercomplainController');
Route::resource('customerprofile','CustomerprofileController');
//Route::post('/complains/get_zones','ComplainsController@get_zones');
Route::resource('addproducts','AddproductController');

Route::resource('product_parts','ProductPartsController');


Route::resource('products','ProductController');
Route::resource('technicians','TechnicianController');
Route::resource('technicianjobs','TechnicianjobController');
Route::resource('/custreg_operator','CustRegOperatorController');


Route::resource('/create_operator','OperatorRegController');
Route::resource('/create_supervisor','SupervisorRegController');



Route::resource('/estimationview','EstimationController');

Route::resource('/buydetails_products','PurchaseProductController');







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
 