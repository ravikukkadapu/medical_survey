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

	public function daily()
	{
			$nud = new NutritionDaily;
			$nud->patient_code = Request::get('patient_code');
			$nud->sunday_diet = Request::get('sunday_diet');
			$nud->sundaydiet_type = Request::get('sundaydiet_type');
			$nud->monday_diet = Request::get('monday_diet');
			$nud->mondaydiet_type = Request::get('mondaydiet_type');
			$nud->tuesday_diet = Request::get('tuesday_diet');
			$nud->tuesdaydiet_type = Request::get('tuesdaydiet_type');
			$nud->wednesday_diet = Request::get('wednesday_diet');
			$nud->wednesdaydiet_type = Request::get('wednesdaydiet_type');
			$nud->thursday_diet = Request::get('thursday_diet');
			$nud->thursdaydiet_type = Request::get('thursdaydiet_type');
			$nud->friday_diet = Request::get('friday_diet');
			$nud->thursdaydiet_type = Request::get('fridaydiet_type');
			$nud->saturday_diet = Request::get('saturday_diet');
			$nud->saturdaydiet_type = Request::get('saturdaydiet_type');
			$nud->veg_serves = Request::get('veg_serves');
			$nud->nonveg_serves = Request::get('nonveg_serves');
			$nud->patient_ip = Request::get('patient_ip');
			$nud->save();

		return Response::json([
				'message' => 'Nutrition Daily data Added.',
				'status_code' => 200
			],200);
	}



}
