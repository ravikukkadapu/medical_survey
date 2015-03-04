<?php

class NutritionController extends \BaseController {

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

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function weekly()
	{
		$patientcode = Request::get('patient_code');
		$dietveg = Request::get('diet_veg');
		$dietnonveg = Request::get('diet_nonveg');
		$nonvegserves = Request::get('nonveg_serves');
		$vegserves = Request::get('veg_serves');
		$ip = Request::get('patient_ip');

		$nuw = new NutritionWeekly;
		$nuw->patient_code = $patientcode;
		$nuw->diet_veg = $dietveg;
		$nuw->diet_nonveg = $dietnonveg;
		$nuw->nonveg_serves = $nonvegserves;
		$nuw->veg_serves = $vegserves;
		$nuw->patient_ip = $ip;
		$nuw->save();

		return Response::json([
				'message' => 'Nutrition Weekly data Added.',
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
