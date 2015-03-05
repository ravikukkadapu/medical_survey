<?php

class BasicController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$pcode = Request::get('patient_code');
		$pmail = Request::get('patient_mail');
		$pmobile = Request::get('patient_mobile');
		$ppwd = Hash::make(Request::get('patient_password'));
		$ip = Request::get('patient_ip');

		$rules = array(
    	'patient_mail'=> 'required|email|unique:users',
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails())
		{
			return Response::json([
					'message' => 'Mail id entered already exists',
					'status_code' => 401
			],401);
		}
		else
		{
			$pat = new Patient;
			$pat->patient_code=$pcode;
			$pat->patient_mail=$pmail;
			$pat->patient_mobile=$pmobile;
			$pat->password=$ppwd;
			$pat->patient_ip=$ip;
			$pat->save();
			return Response::json([
					'message' => 'Patient data Added.',
					'status_code' => 200
			],200);
		}

	}

	public function Dologin()
	{

	    $userdata = array(
                'patient_mail' => Request::get('patient_mail'),
                'password' => Request::get('patient_password')
                );
	    $code = Request::get('patient_mail');
	    $qry = "select patient_code from users where patient_mail = '$code'";
	    $data =DB::select($qry);
    if(Auth::attempt($userdata))
    {
		return Response::json([
				'status_code' => 200,
				'patient_code' =>$data
		],200);
    }
    else
    {
    	return Response::json([
				'message' => 'Incorrect email/password.',
				'status_code' => 401

		],401);
    }
}




	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
