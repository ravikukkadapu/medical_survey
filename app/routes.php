<?php

    Route::get('/medical/register','BasicController@view');

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

Route::post('/medical/nutritionmonthly','NutritionController@monthly');

Route::post('/medical/nutritionquarterly','NutritionController@quarterly');


