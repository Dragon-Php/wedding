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

Route::group(['namespace'=>'Website'], function(){
	Route::get('/', 'HomeController@index');
	Route::get('All-Categories', 'HomeController@categories')->name('categories');
	Route::get('Category/{slug}', 'HomeController@alleventtype');
});

Route::get('Admin', 'AdminLoginController@index');
Route::post('Admin', 'AdminLoginController@login')->name('admin-login');

Route::post('UserRegistration', 'AjaxController@user_reg')->name('user_register');
Route::post('UserLogin', 'AjaxController@user_login')->name('user_login');


Route::post('VendorRegistration', 'AjaxController@vendor_reg')->name('vendor_register');
Route::post('VendorLogin', 'AjaxController@vendor_login')->name('vendor_login');

/*Auth::routes();*/

// Route::get('Admin-Dashboard', 'HomeController@index')->name('admin_dashboard');

Route::group(['middleware'=>['auth:admin'], 'namespace'=>'Admin'], function(){
	Route::get('Admin-Dashboard', 'DashboardController@index')->name('admin_dashboard');


	Route::get('Admin-Category', 'CategoryController@index')->name('admincategory');
	Route::match(['get', 'post'],'Admin-AddCategory', 'CategoryController@create')->name('admin_addcategory');
	Route::match(['get', 'post'],'Admin-EditCategory/{id}', 'CategoryController@edit');
	Route::match(['get', 'post'],'Admin-DeleteCategory/{id}', 'CategoryController@delete');

	Route::get('Admin-VendorType', 'VendorTypeController@index')->name('adminvendortype');
	Route::match(['get', 'post'],'Admin-AddVendorType', 'VendorTypeController@create')->name('admin_addvendortype');
	Route::match(['get', 'post'],'Admin-EditVendorType/{id}', 'VendorTypeController@edit');
	Route::match(['get', 'post'],'Admin-DeleteVendorType/{id}', 'VendorTypeController@delete');
	Route::get('Admin-Logout', function(){
		Auth::guard('admin')->logout();
		return redirect('Admin');
	})->name('admin-logout');
});

Route::group(['middleware'=>['auth:vendor'], 'namespace'=>'Vendor'], function(){
	Route::get('Profile', 'ProfileController@index')->name('vendor_profile');
});

Route::get('UserLogout', function(){
	Auth::logout();
	return redirect('/');
})->name('user_logout');

Route::get('VendorLogout', function(){
	Auth::guard('vendor')->logout();
	return redirect('/');
})->name('vendor_logout');

Route::get('migrate', function(){
	\Artisan::call('migrate:fresh --seed');
});


