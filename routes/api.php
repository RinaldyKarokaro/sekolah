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


Route::namespace('API')
    ->group(function () {
        Route::get('test', 'AuthController@test');
        Route::get('testing', 'AuthController@test');
        Route::post('login/student', 'AuthController@studentLogin');
        Route::post('login/school', 'AuthController@schoolLogin');

        Route::get('home-information', 'HomeController@index');
        Route::get('library', 'LibraryController@index');
        Route::get('category', 'CategoryController@index');
    });