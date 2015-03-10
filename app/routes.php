<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



    // Route::get('/medical/register','BasicController@view');

    Route::post('/medical/register',
        [
           'as' => 'doregister',
           'uses' =>'BasicController@create'
        ]);


// Route::post('/medical/register','BasicController@create');

Route::post('/medical/login','BasicController@Dologin');

Route::post('/medical/diagnostics','DiagnosticsController@store');

Route::post('/medical/nutritiondaily','NutritionController@daily');

Route::post('/medical/nutritionweekly','NutritionController@weekly');

