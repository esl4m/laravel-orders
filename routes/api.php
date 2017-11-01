<?php

use Illuminate\Http\Request;
Use App\Order;

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

Route::get('users', 'UserController@index');
Route::get('users/{id}', 'UserController@show');

Route::get('orders', 'OrderController@index');
Route::get('orders/{id}', 'OrderController@show');
Route::post('orders', 'OrderController@store');
Route::put('orders/{id}', 'OrderController@update');
Route::delete('orders/{id}', 'OrderController@delete');

Route::get('items', 'ItemController@index');
Route::get('items/{id}', 'ItemController@show');
Route::post('items', 'ItemController@store');
Route::put('items/{id}', 'ItemController@update');
Route::delete('items/{id}', 'ItemController@delete');