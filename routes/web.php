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
	Route::get('All-Vendors/{vendor_type}','HomeController@allvendors');
	Route::get('Vendor-Detail/{vendor}','HomeController@vendor_detail');
});

Route::get('Admin', 'AdminLoginController@index');
Route::post('Admin', 'AdminLoginController@login')->name('admin-login');

Route::post('UserRegistration', 'AjaxController@user_reg')->name('user_register');
Route::post('UserLogin', 'AjaxController@user_login')->name('user_login');


Route::post('VendorRegistration', 'AjaxController@vendor_reg')->name('vendor_register');
Route::post('VendorLogin', 'AjaxController@vendor_login')->name('vendor_login');

Route::get('login', function(){
	return redirect('/');
})->name('login');

Route::get('Contact-Us', function(){
	$data['page_content'] = \App\Master\Page::where('id', '6')->first();
	return view('front.contactus', $data);
})->name('contactus');

Route::get('Privacy-Policy', function(){
	$data['page_content'] = \App\Master\Page::where('id', '3')->first();
	return view('front.privatepolicy', $data);
})->name('privacypolicy');
Route::get('About-Us', function(){
	$data['page_content'] = \App\Master\Page::where('id', '2')->first();
	return view('front.aboutus', $data);
})->name('aboutus');
Route::get('Blogs', function(){
	$data['blog_first'] = \App\Master\Page::where('id', '4')->first();
	$data['blog_second'] = \App\Master\Page::where('id', '5')->first();
	$data['pages'] = \App\Master\Page::get();
	$data['blogs'] = \App\Master\Blog::get();
	return view('front.blogs', $data);
})->name('blogs');

Route::get('Blog-Detail/{id}', function($id){
	$data['blog'] = \App\Master\Blog::find($id);
	return view('front.blogdetail', $data);
});

Route::get('Write-Review', function(){
	return view('front.write-review');
})->name('write-review');



/*Auth::routes();*/

// Route::get('Admin-Dashboard', 'HomeController@index')->name('admin_dashboard');

Route::group(['middleware'=>['auth:admin'], 'namespace'=>'Admin'], function(){
	Route::get('Admin-Dashboard', 'DashboardController@index')->name('admin_dashboard');


	Route::get('Admin-Country', 'CountryController@index')->name('admincountry');
	Route::match(['get', 'post'],'Admin-AddCountry', 'CountryController@create')->name('admin_addcountry');
	Route::match(['get', 'post'],'Admin-EditCountry/{id}', 'CountryController@edit');
	Route::match(['get', 'post'],'Admin-DeleteCountry/{id}', 'CountryController@delete');

	Route::get('Admin-State', 'StateController@index')->name('adminstate');
	Route::match(['get', 'post'],'Admin-AddState', 'StateController@create')->name('admin_addstate');
	Route::match(['get', 'post'],'Admin-EditState/{id}', 'StateController@edit');
	Route::match(['get', 'post'],'Admin-DeleteState/{id}', 'StateController@delete');

	Route::get('Admin-City', 'CityController@index')->name('admincity');
	Route::match(['get', 'post'],'Admin-AddCity', 'CityController@create')->name('admin_addcity');
	Route::match(['get', 'post'],'Admin-EditCity/{id}', 'CityController@edit');
	Route::match(['get', 'post'],'Admin-DeleteCity/{id}', 'CityController@delete');

	Route::get('Admin-Category', 'CategoryController@index')->name('admincategory');
	Route::match(['get', 'post'],'Admin-AddCategory', 'CategoryController@create')->name('admin_addcategory');
	Route::match(['get', 'post'],'Admin-EditCategory/{id}', 'CategoryController@edit');
	Route::match(['get', 'post'],'Admin-DeleteCategory/{id}', 'CategoryController@delete');

	Route::get('Admin-VendorType', 'VendorTypeController@index')->name('adminvendortype');
	Route::match(['get', 'post'],'Admin-AddVendorType', 'VendorTypeController@create')->name('admin_addvendortype');
	Route::match(['get', 'post'],'Admin-EditVendorType/{id}', 'VendorTypeController@edit');
	Route::match(['get', 'post'],'Admin-DeleteVendorType/{id}', 'VendorTypeController@delete');

	Route::get('Admin-Blog', 'BlogController@index')->name('adminblog');
	Route::match(['get', 'post'],'Admin-AddBlog', 'BlogController@create')->name('admin_addblog');
	Route::match(['get', 'post'],'Admin-EditBlog/{id}', 'BlogController@edit');
	Route::match(['get', 'post'],'Admin-DeleteBlog/{id}', 'BlogController@delete');

	Route::get('Admin-Page', 'PageController@index')->name('adminpage');
	Route::match(['get', 'post'],'Admin-EditPage/{id}', 'PageController@edit');

	Route::match(['get', 'post'],'Admin-Setting', 'SettingController@index')->name('setting');

	Route::get('Admin-Vendor', 'VendorController@index')->name('adminvendor');
	Route::match(['get', 'post'],'Admin-AddVendor', 'VendorController@create')->name('admin_addvendor');
	Route::match(['get', 'post'],'Admin-EditVendor/{id}', 'VendorController@edit');
	Route::match(['get', 'post'],'Admin-DeleteVendor/{id}', 'VendorController@delete');
	Route::match(['get', 'post'],'Admin-StatusVendor/{id}', 'VendorController@status');

	Route::get('Admin-Logout', function(){
		Auth::guard('admin')->logout();
		return redirect('Admin');
	})->name('admin-logout');
});

Route::group(['middleware'=>['auth:vendor'], 'namespace'=>'Vendor'], function(){
	Route::group([ 'prefix'=>'Vendor'], function(){
		Route::match(['get', 'post'],'Profile', 'ProfileController@index')->name('vendor_profile');
		Route::match(['get', 'post'],'Album', 'ProfileController@album')->name('album');
		Route::match(['get', 'post'],'Gallery', 'ProfileController@gallery')->name('gallery');
		Route::match(['get', 'post'],'Locations', 'ProfileController@vendor_location')->name('vendor_location');
		Route::get('Album-Delete/{id}', 'ProfileController@album_delete');
		Route::get('Gallery-Delete/{id}', 'ProfileController@gallery_delete');
		Route::get('Location/Delete/{id}', 'ProfileController@location_delete');
	});
});

Route::group(['middleware'=>['auth'], 'namespace'=>'User'], function(){
	Route::get('Profile', 'ProfileController@index')->name('user_profile');
	Route::post('Profile-Descrition', 'ProfileController@description')->name('about_user');
	Route::match(['get', 'post'],'User-Password', 'ProfileController@password')->name('user_password');
	Route::match(['get', 'post'],'User-Inbox', 'MailController@index')->name('user_inbox');
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


