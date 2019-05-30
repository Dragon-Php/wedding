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
});

Route::get('Admin', 'AdminLoginController@index');
Route::post('Admin', 'AdminLoginController@login')->name('admin-login');

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

Route::get('migrate', function(){
	\Artisan::call('migrate:fresh --seed');
});


