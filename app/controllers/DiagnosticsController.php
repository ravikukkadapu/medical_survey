<?php

class DiagnosticsController extends \BaseController {

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
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$patientcode = Request::get('patient_code');
		$heartbeatvalue = Request::get('heartbeat_value');
		$heartbeatchkdate = Request::get('heartbeatcheck_date');
		$bpvalue = Request::get('bp_value');
		$bpchkdate = Request::get('bpcheck_date');
		$fastingvalue = Request::get('bloodsugar_fasting');
		$randomvalue = Request::get('bloodsugar_random');
		$postlunchvalue = Request::get('bloodsugar_postlunch');
		$bloodsugarchkdate = Request::get('bloodsugarcheck_date');
		$ip = Request::get('patient_ip');
		$bpvalue = explode("/", $bpvalue);
		$cy=$bpvalue[0];
		$dy=$bpvalue[1];

		$dia = new Diagnostics;
		$dia->patient_code = $patientcode;
		$dia->heartbeat_value = $heartbeatvalue;
		$dia->heartbeatcheck_date = $heartbeatchkdate;
		$dia->bpcystolic_value = $bpvalue[0];
		$dia->bpdystolic_value = $bpvalue[1];
		$dia->bpcheck_date = $bpchkdate;
		$dia->bloodsugar_fasting = $fastingvalue;
		$dia->bloodsugar_random = $randomvalue;
		$dia->bloodsugar_postlunch = $postlunchvalue;
		$dia->bloodsugarcheck_date = $bloodsugarchkdate;
		$dia->patient_ip = $ip;
		$dia->save();

			return Response::json([
					'message' => 'Patient Diagnostics data Added.',
					'status_code' => 200
			],200);
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
