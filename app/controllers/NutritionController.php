<?php

class NutritionController extends \BaseController {

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
		$patientcode = Request::get('patient_code');
		$sundaydiet = Request::get('sunday_diet');
		$sundaydiettype = Request::get('sundaydiet_type');
		$mondaydiet = Request::get('monday_diet');
		$mondaydiettype = Request::get('mondaydiet_type');
		$tuesdaydiet = Request::get('tuesday_diet');
		$tuesdaydiettype = Request::get('tuesdaydiet_type');
		$wednesdaydiet = Request::get('wednesday_diet');
		$wednesdaydiettype = Request::get('wednesdaydiet_type');
		$thursdaydiet = Request::get('thursday_diet');
		$thursdaydiettype = Request::get('thursdaydiet_type');
		$fridaydiet = Request::get('friday_diet');
		$fridaydiettype = Request::get('fridaydiet_type');
		$saturdaydiet = Request::get('saturday_diet');
		$saturdaydiettype = Request::get('saturdaydiet_type');
		$vegserves = Request::get('veg_serves');
		$nonvegserves = Request::get('nonveg_serves');
		$patientip = Request::get('patient_ip');

		$nud = new NutritionDaily;
		$nud->patient_code = $patientcode;
		$nud->sunday_diet = $sundaydiet;
		$nud->sundaydiet_type = $sundaydiettype;
		$nud->monday_diet = $mondaydiet;
		$nud->mondaydiet_type = $mondaydiettype;
		$nud->tuesday_diet = $tuesdaydiet;
		$nud->tuesdaydiet_type = $tuesdaydiettype;
		$nud->wednesday_diet = $wednesdaydiet;
		$nud->wednesdaydiet_type = $wednesdaydiettype;
		$nud->thursday_diet = $thursdaydiet;
		$nud->thursdaydiet_type = $thursdaydiettype;
		$nud->friday_diet = $fridaydiet;
		$nud->fridaydiet_type = $fridaydiettype;
		$nud->saturday_diet = $saturdaydiet;
		$nud->saturdaydiet_type = $saturdaydiettype;
		$nud->veg_serves = $vegserves;
		$nud->nonveg_serves = $nonvegserves;
		$nud->patient_ip = $patientip;
		$nud->save();

		return Response::json([
				'message' => 'Nutrition Daily data Added successfully.',
				'status_code' => 200,
			],200);
	}



}
