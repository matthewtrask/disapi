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

Route::get('parks', ['uses' => 'Api\ParksController@index']);
Route::get('parks/{id}', ['uses' => 'Api\ParksController@fetch'])->where('id', '[0-9]+');
Route::get('rides', ['uses' => 'Api\RidesController@index']);
Route::get('rides/{id}', ['uses' => 'Api\RidesController@fetch'])->where('id', '[0-9]+');