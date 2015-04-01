<?php

class DiagnosticsController extends \BaseController {


	public function store()
	{
		$patientcode = Request::get('patient_code');
		$heartbeatvalue = Request::get('heartbeat_value');
		$heartbeatchkdate = Request::get('heartbeatcheck_date');
		// $from =  Date('Y-m-d H:i:s ',$heartbeatchkdate);
		$bpvalue = Request::get('bp_value');
		$bpchkdate = Request::get('bpcheck_date');
		$fastingvalue = Request::get('bloodsugar_fasting');
		$randomvalue = Request::get('bloodsugar_random');
		$postlunchvalue = Request::get('bloodsugar_postlunch');
		$bloodsugarchkdate = Request::get('bloodsugarcheck_date');
		$latitude = Request::get('latitude');
		$longitude = Request::get('longitude');
		$url  = "http://maps.googleapis.com/maps/api/geocode/json?latlng=".
            $latitude.",".$longitude."&sensor=false";
        $json = @file_get_contents($url);
        $data = json_decode($json);
        $status = $data->status;
        $address = '';
		if($status == "OK")
		{
			$address = $data->results[0]->formatted_address;
    	}
		// return $address;

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
		$dia->heartbeatcheck_date = $heartbeatchkdate;
		$dia->bpsystolic_value = $bpsystolicvalue;
		$dia->bpdiastolic_value = $bpdiastolicvalue;
		$dia->bpcheck_date = $bpchkdate;
		$dia->bloodsugar_fasting = $fastingvalue;
		$dia->bloodsugar_random = $randomvalue;
		$dia->bloodsugar_postlunch = $postlunchvalue;
		$dia->bloodsugarcheck_date = $bloodsugarchkdate;
		$dia->latitude = $latitude;
		$dia->longitude = $longitude;
		$dia->address = $address;
		$dia->patient_ip = $ip;
		$dia->save();

		return Response::json([
				'message' => 'Patient Diagnostics data Added.',
				'status_code' => 200
			],200);
	}



}
