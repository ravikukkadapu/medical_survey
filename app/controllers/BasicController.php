<?php

class BasicController extends \BaseController {

	// public function view()
	// {
	// 	return View::make('register');
	// }

	public function doctor()
	{
		return View::make('doctorregister');
	}

	Public function doctorsave()
	{
		$name = Request::get('doctor_name');
		$mail = Request::get('mail');
		$pwd = Request::get('password');
		$doc = new Doctor;
		$doc->doctor_name = $name;
		$doc->mail = $mail;
		$doc->password = $pwd;
		$doc->save();
			return Response::json([
					'message' => 'Doctor data Added.',
					'status_code' => 200
			],200);

	}

	public function patientsave()
	{
		$pcode = Request::get('patient_code');
		$pmail = Request::get('patient_mail');
		$pmobile = Request::get('patient_mobile');
		$ppwd = Hash::make(Request::get('patient_password'));
		$surveytype = Request::get('surveytype');
		$address = Request::get('address');
		$zipcode = Request::get('zipcode');
		$latitude = Request::get('latitude');
		$longitude = Request::get('longitude');
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
			$pat->patient_code = $pcode;
			$pat->patient_mail = $pmail;
			$pat->patient_mobile = $pmobile;
			$pat->password = $ppwd;
			$pat->surveytype = $surveytype;
			$pat->address = $address;
			$pat->zipcode = $zipcode;
			$pat->latitude = $latitude;
			$pat->longitude = $longitude;
			$pat->patient_ip = $ip;
			$pat->save();
			return Response::json([
					'message' => 'Patient data Added.',
					'status_code' => 200
			],200);
		}

	}

	public function patientlogin()
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

	public function doctorlogin()
	{
		$mail = Request::get('mail');
		$pwd = Request::get('password');
		$qry = "select doctor_name from doctor where mail = '$mail' and password='$pwd'";
		$data =DB::select($qry);

		if($data==null)
		{
			return Response::json([
					'message' => 'Incorrect email/password.',
					'status_code' => 401
			],401);
		}

		else
		{
			return Response::json([
					'status_code' => 200,
					'doctor_name' =>$data
			],200);
		}
	}

		public function search()
		{
			return View::make('search');
		}

		// public function searchpage()
		// {
		// $minhb = Request::get('minhb');
		// $maxhb = Request::get('maxhb');

		// // $query = "select patient_code,latitude,longitude from med_sample WHERE heartbeat_value BETWEEN $minhb and $maxhb ";

		// $query = "select patient_code,latitude,longitude from diagnostics WHERE heartbeat_value BETWEEN $minhb and $maxhb ";

		// $result = DB::select($query);
		// if($result==null)
		// {
		// 	return Response::json([
		// 			'message' => 'No data for this search',
		// 			'status_code' => 200
		// 	],200);
		// }
		// else
		// {
		// 	return Response::json([
		// 			'data' => $result,
		// 			'status_code' => 200
		// 	],200);
		// }

		// }


	public function searchpage()
    {
    $minsystolic = Request::get('minsystolic');
    $maxsystolic = Request::get('maxsystolic');
    $mindiastolic = Request::get('mindiastolic');
    $maxdiastolic = Request::get('maxdiastolic');
    $minhb = Request::get('minhb');
    $maxhb = Request::get('maxhb');
    $minslf = Request::get('minslf');
    $maxslf = Request::get('maxslf');
    $minslr = Request::get('minslr');
    $maxslr = Request::get('maxslr');
    $minslp = Request::get('minslp');
    $maxslp = Request::get('maxslp');
    $addr = Request::get('address');
    $query = "select patient_code,latitude,longitude from diagnostics";
    $query_length = strlen($query);

    if($minhb != '' and $maxhb != '')
    {
        $query .= " WHERE heartbeat_value BETWEEN $minhb and $maxhb ";
    }

    if($minsystolic != '' and $maxsystolic != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bpsystolic_value BETWEEN $minsystolic and $maxsystolic ";
        }
        else
        {
            $query .= " WHERE bpsystolic_value BETWEEN $minsystolic and $maxsystolic ";
        }
    }

    if($mindiastolic != '' and $maxdiastolic != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bpdiastolic_value BETWEEN $mindiastolic and $maxdiastolic";
        }
        else
        {
            $query .= " WHERE bpdiastolic_value BETWEEN $mindiastolic and $maxdiastolic ";
        }
    }

    if($minslf != '' and $maxslf != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bloodsugar_fasting BETWEEN $minslf and $maxslf ";
        }
        else
        {
            $query .= " WHERE bloodsugar_fasting BETWEEN $minslf and $maxslf ";
        }
    }

    if($minslr != '' and $maxslr != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bloodsugar_random BETWEEN $minslr and $maxslr ";
        }
        else
        {
	        $query .= " WHERE bloodsugar_random BETWEEN $minslr and $maxslr ";
        }
    }

    if($minslp != '' and $maxslp != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bloodsugar_postlunch BETWEEN $minslp and $maxslp ";
        }
        else
        {
           $query .= " WHERE bloodsugar_postlunch BETWEEN $minslp and $maxslp ";
        }
    }

    // if($addr != '')
    // {
    //     if(strlen($query) > $query_length)
    //     {
    //         $query .= "AND address = '$addr' ";
    //     }
    // }

// return $query;
        $result = DB::select($query);
        return $result;
    }
}

