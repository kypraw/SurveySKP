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

    Route::get('/login', [
        'uses' => 'AuthController@getLogin',
        'as' => 'login'
    ]);

    Route::post('login', [
        'uses' => 'AuthController@postLogin',
        'as' => 'login.post'
    ]);
});

Route::get('logout', [
        'middleware' => 'auth',
        'uses' => 'AuthController@getLogout',
        'as' => 'logout'
    ]);

Route::group(['middleware' => ['auth', 'needSurvey']], function(){
    Route::get('surveys',[
        'uses' => 'SurveyController@getSurveys',
        'as' => 'surveys'
    ]);

    Route::post('surveys', [
        'uses' => 'SurveyController@postSurveys',
        'as' => 'surveys.post'
    ]);

    Route::post('answers', [
        'uses' => 'AnswerController@postAnswers',
        'as' => 'answers.post'
    ]);
});

Route::get('terimakasih', [
    'middleware' => 'endSurvey',
    'uses' => 'SurveyController@getTerimaKasih',
    'as' => 'terimakasih'
]);

Route::group(['middleware' => ['isAdmin']], function(){
    Route::get('layanan', [
        'uses' => 'DashboardController@getLayanan',
        'as' => 'layanan'
    ]);
});