<?php

// Route::get('/medical/register','BasicController@patient');

Route::post('/medical/register',
[
    'as' => 'doregister',
    'uses' =>'BasicController@patientsave'
]);

Route::get('/medical/doctorregister','BasicController@doctor');

Route::post('/medical/doctorregister',
[
    'as' => 'doc_register',
    'uses' =>'BasicController@doctorsave'
]);


Route::post('/medical/login','BasicController@patientlogin');

Route::post('/medical/doctorlogin','BasicController@doctorlogin');

Route::post('/medical/diagnostics','DiagnosticsController@store');

Route::post('/medical/nutritiondaily','NutritionController@daily');

Route::post('/medical/nutritionweekly','NutritionController@weekly');

Route::post('/medical/nutritionmonthly','NutritionController@monthly');

Route::post('/medical/nutritionquarterly','NutritionController@quarterly');

// Route::get('/medical/search','SearchController@search');

Route::post('/medical/search',
[
        'as' => 'post_search',
        'uses' =>'SearchController@searchpage'
]);

Route::post('/medical/patientlogout','BasicController@patientlogout');

Route::post('/medical/doctorlogout','BasicController@doctorlogout');

// Route::get('/medical/dataview','HomeController@view');
