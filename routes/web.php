<?php

use App\UnitTwo;
use Illuminate\Support\Facades\Input;
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
        'uses' => 'AuthController@getHome',
        'as' => 'home'
    ]);

    Route::get('/login', [
        'uses' => 'AuthController@getLogin',
        'as' => 'login'
    ]);

    Route::post('login', [
        'uses' => 'AuthController@postLogin',
        'as' => 'login.post'
    ]);
    /*
	Route::post('adldap',[
		'uses' => 'AuthController@getAdldap',
		'as' => 'adldap'
	]);
	*/
});

Route::get('logout', [
        'middleware' => 'auth',
        'uses' => 'AuthController@getLogout',
        'as' => 'logout'
    ]);

Route::group(['middleware' => ['auth', 'needSurvey']], function(){
    Route::get('biodata', [
        'uses' => 'SurveyController@getBiodata',
        'as' => 'biodata'
    ]);

    Route::get('/information/create/ajax-unit-two',function()
    {
        $unit_id = Input::get('unit_id');
        $subunits = UnitTwo::where('unit_id','=',$unit_id)->get();
        return $subunits;
    });

    Route::post('biodata', [
        'uses' => 'SurveyController@postBiodata',
        'as' => 'biodata.post'
    ]);

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

    Route::get('layanan/{layanan_id}', [
        'uses' => 'DashboardController@getLayananPer',
        'as' => 'layanan.per'
    ]);

    Route::get('totalrespondent',[
        'uses' => 'DashboardController@getLayananTotalRespondent',
        'as' => 'dashboard.byTotalRespondent'
    ]);

    Route::get('users', [
        'uses' => 'UserDashboardController@getUsers',
        'as' => 'users'
    ]);

    Route::get('users/unit', [
        'uses' => 'UserDashboardController@getUnits',
        'as' => 'users.unit'
    ]);

    Route::get('users/{unit_two_id}', [
        'uses' => 'UserDashboardController@getUsersPer',
        'as' => 'users.per'
    ]);

    Route::get('jabatan',[
        'uses' => 'UserDashboardController@getJabatan',
        'as' => 'dashboard.byJabatan'
    ]);

    Route::get('daerah', [
        'uses' => 'DashboardController@getDaerah',
        'as' => 'daerah'
    ]);
});
