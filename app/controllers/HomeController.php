<?php

class HomeController extends BaseController {

	/*
	||----------------------------------------------------------------||
	||                    Default Home Controller                     ||
	||----------------------------------------------------------------||
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function store()
	{

$d1=strtotime("July 04");

$d2=ceil(($d1-time())/60/60/24/30);
return $d2;
echo "There are " . $d2 ." days until 4th of July.";

	}


}
