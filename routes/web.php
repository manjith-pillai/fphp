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
//Added for portal
Route::get('/', function () {
    return view('marketcenter');
});

//Added for admin dashboard
Route::get('admin', function () {
    return view('admin/dashboard');
})->middleware('auth');

Auth::routes();

//Route::get('/home', 'HomeController@index');

//Added for Demo CRUD base module
Route::group(['middleware' => ['web']], function() {
  Route::resource('admin/demo','DemoController');  
});

//Added for Demotab CRUD base module
Route::group(['middleware' => ['web']], function() {
  Route::resource('admin/demotab','DemoTabController');  
});

//Added for User Management
Route::group(['middleware' => ['web']], function() {
	Route::resource('admin/user','UserController');
});

//Added for System Configuration
Route::group(['middleware' => ['web']], function() {
	Route::resource('admin/sysconfig','SysConfigController');
});


//Added for Role Management
Route::group(['middleware' => ['web']], function () {
   Route::resource('admin/role','RoleController');
});


//Added for Permission Management
Route::group(['middleware' => ['web']], function() {
	Route::resource('admin/permission','PermissionController');
});


//Added for Messenger Module
Route::group(['middleware' => ['web']], function() {
	Route::resource('admin/messenger','MessengerController');
});
	
//Added for Coming Soon Feature
Route::get('comingsoon', function () {
    return view('comingsoon');
});


//Added for login for portal
Route::get('portallogin', function () {
   return view('layouts/marketcenter/login');
});


// To be verified
//Route::get('loginportal', function () {
    //return view('marketcenter');
//})->middleware('auth');


// Added for property crud operations
Route::group(['middleware' => ['web']], function() {
  Route::resource('property','PropertyController');  
});


// Added For buyerseller-Registration
Route::get('buyerseller', function () {
    return view('layouts.marketcenter.buyer-seller-registrationform');
});

// Added For Agents-Registration
Route::group(['middleware' => ['web']], function() {
	Route::resource('agents','AgentsController');
});


// Route to Document module
Route::group(['middleware' => ['web']], function () {
   Route::resource('admin/document','DocumentController');
});

// Route to Audit Log
Route::group(['middleware' => ['web']], function () {
   Route::resource('admin/audit','AuditController');
});


//Added for Managing Subscription Plans
Route::group(['middleware' => ['web']], function() {
	Route::resource('admin/plan','PlanController');
});

//Added for Subscription Module
Route::group(['middleware' => ['web']], function() {
	Route::resource('subscription','SubscriptionController');
});


// Added for Admin User Profile
Route::get('profile', function() {
	return view('user.profile');
});


//Added for Portal User profile
Route::get('userprofile', function() {
	return view('portaluserprofile');
});


//Added For Requirement crud operations
Route::group(['middleware' => ['web']], function() {
  Route::resource('requirement','RequirementController');  
});


//Added for my-properties
Route::get('retrieveproperty','PropertyController@retrieveproperty');


//Added for editing and Updating Permissions
Route::get('permission_manager/{id}/edit','UpdatePermissionController@permissionmanager');
Route::put('permission_manager/{id}','UpdatePermissionController@updatepermission');



//Added for Payment Confirmation
Route::get('confirmation', function() {
	return view('subscription.confirmation');
});

// Added for Document Module in portal
Route::group(['middleware' => ['web']], function() {
  Route::resource('portaldocument','PortalDocumentController');  
});

// Added for Changing Number while Veroifying user from OTP
Route::get('verifyaccount', function() {
	return view('verifyaccount');
});

//Added for OTP Verification
Route::post('verifyaccount','UserController@verifycode');


//Added for User Email Verification
Route::get('verifyuseremail','UserController@verifyemail');

//Added for Reset Password using existing password
Route::get('resetpass',function () {
	return view('user.resetpass');
});

//Added to Change password from existing password
Route::post('user/credentials','UserController@postCredentials');

// Added for Agent Email verification
Route::get('verifyagentemail', function() {
	return view('agents.verifyemail');
});


//Added for Laravel Social Integration
// For Facebook
Route::get('social/login/redirect/{provider}', ['uses' =>'Auth\LoginController@redirectToProvider', 'as' => 'social.login']);
// For Google-Plus
Route::get('social/login/{provider}', 'Auth\LoginController@handleProviderCallback');



//Added for Map Search Bar
Route::post('search', 'PropertyController@search');

// Added for MarketCenter Module
Route::group(['middleware' => ['web']], function() {
	Route::resource('marketcenter','MarketCenterController');
});

//Added for search form in User Management
Route::post('/admin/search', 'UserController@search');

//Added for Directory Listing View(Currently Documents Module)
Route::match(['get', 'post'], 'document/directorylisting/{any?}', function() {
	return view('document.directorylisting');
})->where('any','.*');

//Added for Admin Email Management
Route::group(['middleware' => ['web']], function () {
   Route::resource('admin/email','EmailController');
});

//Code for view excel file in browser
Route::get('admin/document/showexcel/{id}','DocumentController@showexcel');

// Added to get Audit Trail
Route::get('audit',function () {
	return view('audit');
});



//download excel file
Route::get('downloadExcelFile','UserController@downloadExcelFile');

//import excel file
Route::post('fileImport','UserController@fileImport');
//download pdf file
Route::get('admin/document/pdfDownload/{id}','DocumentController@pdfDownload');

Route::post('/delete','UserController@deletechecked');

Route::get('/notifications','UserController@show_notifications');



