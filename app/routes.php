<?php

// Route::get('/medical/register','BasicController@patient');

//requesting new password

// Route::get('/medical/reset',
//     [
//     'as' => 'password_remind',
//   'uses' => 'HomeController@remind',
// ]
// );

// //--sending link for  password change for patient

// Route::post('/medical/reset',
//   [
//   'uses' => 'HomeController@request',
//   'as' => 'password_request'
//   ]
// );

//

Route::post('/medical/patient/reset',
[
        'as' => 'patient_request',
        'uses' =>'HomeController@patientrequest'
]);

Route::post('/medical/doctor/reset',
[
        'as' => 'doctor_request',
        'uses' =>'HomeController@doctorrequest'
]);


Route::get('medical/patient/reset/{token}', array(
  'uses' => 'HomeController@patientreset',
  'as' => 'patient_reset'
));

//--password change

Route::post('medical/patient/reset/{token}', array(
  'uses' => 'HomeController@patientupdate',
  'as' => 'patient_update'
));



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




