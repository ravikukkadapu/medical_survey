<?php

    // Route::get('/medical/register','BasicController@view');

    Route::post('/medical/register',
        [
           'as' => 'doregister',
           'uses' =>'BasicController@create'
        ]);

    // Route::get('/medical/doctorregister','BasicController@doctor');

    Route::post('/medical/doctorregister',
        [
           'as' => 'doc_register',
           'uses' =>'BasicController@doctorcreate'
        ]);


Route::post('/medical/login','BasicController@patientlogin');

Route::post('/medical/doctorlogin','BasicController@doctorlogin');

Route::post('/medical/diagnostics','DiagnosticsController@store');

Route::post('/medical/nutritiondaily','NutritionController@daily');

Route::post('/medical/nutritionweekly','NutritionController@weekly');

Route::post('/medical/nutritionmonthly','NutritionController@monthly');

Route::post('/medical/nutritionquarterly','NutritionController@quarterly');


