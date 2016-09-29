<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middleware' => ['guest']], function(){
    Route::get('/', [
        'uses' => 'AuthController@getLogin',
        'as' => 'login'
    ]);

    Route::post('login', [
        'uses' => 'AuthController@postLogin',
        'as' => 'login.post'
    ]);
});

Route::group(['middleware' => ['auth']], function(){
    Route::get('logout', [
        'uses' => 'AuthController@getLogout',
        'as' => 'logout'
    ]);

    Route::get('surveys',[
        'uses' => 'SurveyController@getSurveys',
        'as' => 'surveys'
    ]);
});
