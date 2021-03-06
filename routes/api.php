<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('states/{country_id}', 'AjaxController@states');
Route::get('cities/{state_id}', 'AjaxController@cities');
Route::get('vendorcity/{country}', 'AjaxController@vendorcity');
Route::post('vendors', 'AjaxController@vendors');
Route::post('allvendors', 'AjaxController@allvendors');
