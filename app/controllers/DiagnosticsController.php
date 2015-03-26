<?php

class DiagnosticsController extends \BaseController {


	public function store()
	{
		$patientcode = Request::get('patient_code');
		$heartbeatvalue = Request::get('heartbeat_value');
		$heartbeatchkdate = Request::get('heartbeatcheck_date');
		// $from =  Date('Y-m-d H:i:s ',$heartbeatchkdate);
		$bpvalue = Request::get('bp_value');
		// $bpsystolicvalue = Request::get('bpsystolic_value');
		// $bpdiastolicvalue = Request::get('bpdiastolic_value');
		$bpchkdate = Request::get('bpcheck_date');
		$fastingvalue = Request::get('bloodsugar_fasting');
		$randomvalue = Request::get('bloodsugar_random');
		$postlunchvalue = Request::get('bloodsugar_postlunch');
		$bloodsugarchkdate = Request::get('bloodsugarcheck_date');
		$latitude = Request::get('latitude');
		$longitude = Request::get('longitude');
		$ip = Request::get('patient_ip');
		if($bpvalue ==null)
		{
			$bpsystolicvalue ='';
			$bpdiastolicvalue = '';
		}
		else
		{
			$val = explode('/',$bpvalue);
			$bpsystolicvalue = $val[0];
			$bpdiastolicvalue = $val[1];
		}

		$dia = new Diagnostics;
		$dia->patient_code = $patientcode;
		$dia->heartbeat_value = $heartbeatvalue;
		$dia->heartbeatcheck_date = $heartbeatcheckdate;
		// $dia->heartbeatcheck_date = $from;
		$dia->bpsystolic_value = $bpsystolicvalue;
		$dia->bpdiastolic_value = $bpdiastolicvalue;
		$dia->bpcheck_date = $bpchkdate;
		$dia->bloodsugar_fasting = $fastingvalue;
		$dia->bloodsugar_random = $randomvalue;
		$dia->bloodsugar_postlunch = $postlunchvalue;
		$dia->bloodsugarcheck_date = $bloodsugarchkdate;
		$dia->latitude = $latitude;
		$dia->longitude = $longitude;
		$dia->patient_ip = $ip;
		$dia->save();

		return Response::json([
				'message' => 'Patient Diagnostics data Added.',
				'status_code' => 200
			],200);
	}



}
