<?php

// Route::get('/medical/register','BasicController@patient');
//--registers the patient data.

Route::post('/medical/register',
[
    'as' => 'doregister',
    'uses' =>'BasicController@patientsave'
]);

//--registration for doctor.

Route::get('/medical/doctorregister','BasicController@doctor');

//--data saving into database.

Route::post('/medical/doctorregister',
[
    'as' => 'doc_register',
    'uses' =>'BasicController@doctorsave'
]);

//--patient login page.

Route::post('/medical/login','BasicController@patientlogin');

//--doctor login page.

Route::post('/medical/doctorlogin','BasicController@doctorlogin');

//--diagnostics data saving into database.

Route::post('/medical/diagnostics','DiagnosticsController@store');

//--daily data for nutrition .

Route::post('/medical/nutritiondaily','NutritionController@daily');

//--weekly data for nutrition .

Route::post('/medical/nutritionweekly','NutritionController@weekly');

//--monthly data for nutrition .

Route::post('/medical/nutritionmonthly','NutritionController@monthly');

//--quarterly  data for nutrition .

Route::post('/medical/nutritionquarterly','NutritionController@quarterly');

// Route::get('/medical/search','SearchController@search');

//--search form for doctor.

Route::post('/medical/search',
[
        'as' => 'post_search',
        'uses' =>'SearchController@searchpage'
]);

//-- logout for patient.

Route::post('/medical/patientlogout','BasicController@patientlogout');

//--logout for doctor.

Route::post('/medical/doctorlogout','BasicController@doctorlogout');

// Route::get('/medical/dataview','HomeController@view');



Route::get('/medical/sample','HomeController@store');
