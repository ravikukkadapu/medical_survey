<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
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

	public function imagepage()
	{
		$qry ="select code,image from sample";
		$res = DB::select($qry);
		// return $res;
		return View::make('temp',['data'=>$res]);
	}

	public function image()
	{
		$code=Request::get('code');
		$image=Request::get('image');

		$x = new sample;
		$x->code = $code;
		$x->image = $image;
		$x->save();
		return 'Data saved';
	}


	public function samplechk()
    {
        return View::make('testexample');
    }

	public function samplechkpage()
    {
    	$v=$nv=0;
        $veg1=Request::get('veg1');
        $nonveg1=Request::get('nonveg1');
        if($veg1 == 'on' and $nonveg1 == null)
        {
        	$v = $v+1 ;
            return 'veg';
        }
        if($veg1 == null and $nonveg1 == 'on')
        {
        	$nv = $nv+1 ;
        	return 'non-veg';
        }
         if($veg1 == 'on' and $nonveg1 == 'on')
        {
        	$nv = $nv+1;
        	$v = $v+1 ;
        	return 'both';
        }
    }
}
