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
		$bpvalue = Request::get('bp_value');
		$bpchkdate = Request::get('bpcheck_date');
		$bptype = Request::get('bp_type');
		$heartbeatvalue = Request::get('heartbeat_value');
		$heartbeatchkdate = Request::get('heartbeatcheck_date');
		$sugarlevelvalue = Request::get('sugarlevel_value');
		$sugarlevelchkdate = Request::get('sugarlevelcheck_date');
		$sugarleveltype = Request::get('sugarlevel_type');
		$ip = Request::get('patient_ip');

		$dia = new Diagnostics;
		$dia->patient_code=$patientcode;
		$dia->bp_value=$bpvalue;
		$dia->bpcheck_date = $bpchkdate;
		$dia->bp_type = $bptype;
		$dia->heartbeat_value = $heartbeatvalue;
		$dia->heartbeatcheck_date = $heartbeatchkdate;
		$dia->sugarlevel_value = $sugarlevelvalue;
		$dia->sugarlevelcheck_date = $sugarlevelchkdate;
		$dia->sugarlevel_type = $sugarleveltype;
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
