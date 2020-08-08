<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('country', 'country\countryController@country');
Route::get('country/{id}', 'country\countryController@countryById');
Route::post('country', 'country\countryController@countrySaved');
Route::put('country/{id}', 'country\countryController@countryUpdate');
Route::delete('country/{id}', 'country\countryController@countryDelete');

Route::apiResource('student', 'StudentController');

Route::apiResource('order', 'orderController');
Route::apiResource('product', 'productController');


Route::get('productFromOrder/{id}', "productController@productFromOrder");
