<?php

class BasicController extends \BaseController {

	// public function patient()
	// {
	// 	return View::make('register');
	// }

//--view code for doctor registration page.

	public function doctor()
	{
		return View::make('doctorregister');
	}

//--saving doctor details into db from doctor registration page.

	Public function doctorsave()
	{
		$name = Request::get('doctor_name');
		$mail = Request::get('mail');
		$pwd = Request::get('password');
        $cpwd = Request::get('confirm_password');
        $mobile = Request::get('doctor_mobile');
        $specialization = Request::get('specialization');
        $address = Request::get('address');

        $rules = array(
        'mail'=> 'required|email|unique:doctor',
        );

        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails())
        {
            echo "<script>alert('Mail id entered already exists');</script>";
            // return View::make('doctorregister');
            return Redirect::back()->withInput();
            // return Response::json([
                    // 'message' => 'Mail id entered already exists',
                    // 'status_code' => 401
            // ],401);
        }
        else
        {
            if($pwd !=$cpwd)
            {
            echo "<script>alert('password mismatch');</script>";
            // return View::make('doctorregister');
            return Redirect::back()->withInput();
            // return Response::json([
            //         'message' => 'password mismatch',
            //         'status_code' => 402
            // ],402);
            }
            else
            {
            $doc = new Doctor;
            $doc->doctor_name = $name;
            $doc->mail = $mail;
            $doc->password = $pwd;
            $doc->doctor_mobile = $mobile;
            $doc->specialization = $specialization;
            $doc->address = $address;
            $doc->save();
            echo "<script>alert('Doctor Data Added Successfully');</script>";
            return View::make('doctorregister');
            }

            // return Response::json([
            //         'message' => 'Doctor data Added.',
            //         'status_code' => 200
            // ],200);
        }

	}

//--saving patient details into db from patient registration page.

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

//--login for patient.

	public function patientlogin()
	{
	    $userdata = array(
                'email' => Request::get('patient_mail'),
                'password' => Request::get('patient_password')
                );
	    $code = Request::get('patient_mail');
	    $qry = "select patient_code from users where email = '$code'";
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

//--login for doctor.

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

//--logout for patient page.

    public function patientlogout()
    {
        // Auth::logout();
        return Response::json([
                'message' =>' logout successfully',
                'status_code' => 200
        ],200);
    }

//--logout for doctor page.

    public function doctorlogout()
    {
        return Response::json([
                'message' =>' logout successfully',
                'status_code' => 200
        ],200);
    }
}

