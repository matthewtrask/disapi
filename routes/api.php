<?php

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

Route::get('/user', function () {
    // authenticated user. Use User::find() to get the user from db by id
    return auth()->user();
})->middleware('auth:api');

Route::get('parks', ['uses' => 'Api\ParksController@index']);
Route::get('parks/{id}', ['uses' => 'Api\ParksController@fetch'])->where('id', '[0-9]+');
Route::post('parks', ['uses' => 'Api\ParksController@create']);
Route::put('parks/{id}', ['uses' => 'Api\ParksController@edit'])->where('id', '[0-9]+');
Route::delete('parks/{id}', ['uses' => 'Api\ParksController@destroy'])->where('id', '[0-9]+');

Route::get('rides', ['uses' => 'Api\RidesController@index']);
Route::get('rides/{id}', ['uses' => 'Api\RidesController@fetch'])->where('id', '[0-9]+');
Route::post('rides', ['uses' => 'Api\RidesController@create']);
Route::put('rides/{id}', ['uses' => 'Api\RidesController@edit'])->where('id', '[0-9]+');
Route::delete('rides/{id}', ['uses' => 'Api\RidesController@destroy'])->where('id', '[0-9]+');


Route::get('resorts', ['uses' => 'Api\ResortsController@index']);
Route::get('resorts/{id}', ['uses' => 'Api\ResortsController@fetch'])->where('id', '[0-9]+');
Route::post('resorts', ['uses' => 'Api\ResortsController@create']);
Route::put('resorts/{id}', ['uses' => 'Api\ResortsController@edit'])->where('id', '[0-9]+');
Route::delete('resorts/{id}', ['uses' => 'Api\ResortsController@destroy'])->where('id', '[0-9]+');

Route::get('restaurants', ['uses' => 'Api\RestaurantsController@index']);
Route::get('restaurants/{id}', ['uses' => 'Api\RestaurantsController@fetch'])->where('id', '[0-9]+');
Route::post('restaurants', ['uses' => 'Api\RestaurantsController@create']);
Route::put('restaurants/{id}', ['uses' => 'Api\RestaurantsController@edit'])->where('id', '[0-9]+');
Route::delete('restaurants/{id}', ['uses' => 'Api\RestaurantsController@destroy'])->where('id', '[0-9]+');


Route::get('parks/{id}/rides', ['uses' => 'Api\ParkRidesController@fetch'])->where('id', '[0-9]+');
Route::get('parks/{id}/restaurants', ['uses' => 'Api\ParkRestaurantsController@fetch'])->where('id', '[0-9]+');

Route::post('users', ['uses' => 'Api\UsersController@create']);
Route::post('register', ['uses' => 'Api\Auth\RegisterController@create']);