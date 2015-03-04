<?php

class SaveController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function sample()
	{
		return "this is MEDICAL SURVEY code...";
	}


	public function diagnosticsdata()
	{
		$patientcode = Request::get('patient_code');
		$bpvalue = Request::get('bp_value');
		$bpchkdate = Request::get('bpcheck_date');
		$heartbeatvalue = Request::get('heartbeat_value',30);
		$heartbeatchkdate = Request::get('heartbeatcheck_date',30);
		$sugarlevelvalue = Request::get('sugarlevel_value',30);
		$sugarlevelchkdate = Request::get('sugarlevelcheck_date',30);

		$dia = new Diagnostics;
		$dia->patient_code=$patientcode;
		$dia->bp_value=$bpvalue;
		$dia->bpcheck_date = $bpchkdate;
		$dia->heartbeat_value = $heartbeatvalue;
		$dia->heartbeatcheck_date = $heartbeatchkdate;
		$dia->sugarlevel_value = $sugarlevelvalue;
		$dia->sugarlevelcheck_date = $sugarlevelchkdate;
		$dia->save();
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
		//
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
