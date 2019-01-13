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


//static pages 
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
Route::get('/customerReviews',function (){
 return view('customerReviews');
});
//customer index
Route::get('/customer',function (){
 return view('customer.index_customer');
});
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');

//COMPLAINS _ Customer 
Route::resource('customercomplain','CustomercomplainController');
Route::resource('customerprofile','CustomerprofileController');
//RATE
Route::resource('rate','RateController');
Route::get('viewcustomerproducts','viewCustController@custcomplaintview');
Route::post('complains/fetch','ComplainsController@fetch')->name('complains.fetch');
Route::resource('customerestimationview','CustomerestimationController');
Route::resource('rejectestimation','RejectestimationController');

Route::group(['middleware' => 'disablepreventback'],function(){
	Auth::routes();
    Route::get('/home', 'HomeController@index');
    Route::get('/admin', 'AdminController@index')->name('admin');
    
    //Route::resource('complains','ComplainsController');
    
});
 
Route::group(['middleware' => 'App\Http\Middleware\SupervisorMiddleware'],function(){
    Route::group(['middleware' => 'disablepreventback'],function(){
         Route::get('/supervisor',function (){
            return view('supervisor.sup_index');
           });
           //COMPLAINTS
         Route::resource('complains','ComplainsController');
        //SUPERVISOR
         Route::get('/viewassign', 'AssignviewController@viewassign');
         Route::get('/viewcompleted', 'AssignviewController@viewcompleted');
         Route::get('/viewrejected', 'AssignviewController@viewrejected');
         Route::resource('/viewhold', 'HoldComplaintController');
         Route::resource('estimationapprove','EstimationapproveController');
         Route::resource('Satusholding','SatusholdingController');
    });
});

Route::group(['middleware' => 'App\Http\Middleware\TechnicianMiddleware'],function(){
    Route::group(['middleware' => 'disablepreventback'],function(){
         // Route::resource('technicians','TechnicianController');
         Route::resource('technicianjobs','TechnicianjobController');
         Route::resource('view','ViewtaskController');
         Route::resource('viewprocessing','ViewjobsController');
         //estimations
         Route::resource('estimationview','EstimationController');
    });
});

Route::group(['middleware' => 'App\Http\Middleware\OperatorMiddleware'],function(){
    Route::group(['middleware' => 'disablepreventback'],function(){
        //operator
         Route::get('/operator',function (){
            return view('operator.index_operator');
            });
         Route::get('/newproducts',function (){
            return view('operator.product_index');
            });
         Route::resource('technicians','TechnicianController');
         Route::resource('/jobreq_operator', 'JobReqOperatorController');
         Route::resource('/custreg_operator','CustRegOperatorController');
         Route::resource('/buydetails_products','PurchaseProductController');
         //PRODUCTS(Operator)
         Route::resource('addproducts','AddproductController');
         Route::resource('product_parts','ProductPartsController');
         Route::resource('products','ProductController');
         Route::resource('addproducts','AddproductController');
         Route::resource('addpart','AddpartController');
         Route::match(['get','post'],'/regoperator', 'AdminregController@usersave')->name('regoperator');
    });
});

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'],function(){
    Route::group(['middleware' => 'disablepreventback'],function(){
         Route::get('/manager',function (){
            return view('manager.index_manager');
            });

        //MANAGER VIEWS
         Route::get('/viewcomplains', 'ManagerViewController@complaintview');
         Route::get('/viewcustomers', 'ManagerViewController@customerview');
         Route::get('/viewoperators', 'ManagerViewController@operatorview');
         Route::get('/viewsupervisors', 'ManagerViewController@supervisorview');
         Route::get('/viewtechnicians', 'ManagerViewController@technicianview');
         Route::get('/viewproducts', 'ManagerViewController@productsview');
         Route::get('/viewusers', 'ManagerViewController@userview');

        //Manager
         Route::post('/typeviewproducts', 'ManagerViewController@typeproductview');
         Route::post('/typeviewcomplaints', 'ManagerViewController@typecomplaintview');

        //Manager
         Route::resource('/create_operator','OperatorRegController');
         Route::resource('/create_supervisor','SupervisorRegController');

        //PDF (REPORT)(Manager)
         Route::get('/PDF', 'PDFController@getPDF');
         Route::get('/PDFK', 'PDFController@getPDFK');

   
    });
});