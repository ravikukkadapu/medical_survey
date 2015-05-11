<?php

class HomeController extends BaseController
{

	// public function remind()
	// {
	// 	return View::make('remind');
	// }

	public function doctorrequest()
	{
		return 'doctor';
	}
	public function patientrequest()
	{
		$to = Request::get('email');
		$token = md5($to);
		$id = "select * from users where email ='$to'";
		$result = DB::select($id);
		if($result)
		{
			$query ="update users set token ='$token' where email= '$to'";
			$result = DB::select($query);
			Mail::send('emails.auth.reminder', array('token'=>md5(Request::get('email'))), function($message)
			{
				$message->to(Request::get('email'),'token')->subject('Reset your Password.');
			});
		return "Confiramation link has sent to your mail id";
		}
		else
		{
			return  "Mail id deosn't exists";
		}
	}

	public function patientreset($token)
	{
		$value ="select email from users where token ='$token'";
		$result = DB::select($value);
		return View::make('reset',['data'=>$result])->with('token', $token);
	}

	public function patientupdate($token)
	{
		$email = Request::get('email');
		$password =Request::get('password');
		$enpassword =Hash::make(Request::get('password'));
		$cpassword = Request::get('confirm_password');

		if($password !=$cpassword)
            {
            	return 'password mismatch';
            }
        else
        	{
				$query ="update users set password = '$enpassword' where email= '$email'";
				$result = DB::select($query);
            	return 'password changed successfully.';
            }
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

}
