<?php

class NutritionController extends \BaseController
{
	public function daily()
	{
		$patientcode = Request::get('patient_code');
		$fromdate = Request::get('fromdate');
		$todate = Request::get('todate');
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
		$latitude = Request::get('latitude');
		$longitude = Request::get('longitude');
		$ip = Request::get('patient_ip');

		$nud = new NutritionDaily;
		$nud->patient_code = $patientcode;
		$nud->fromdate = $fromdate;
		$nud->todate = $todate;
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
		$nud->latitude = $latitude;
		$nud->longitude = $longitude;
		$nud->patient_ip = $ip;
		$nud->save();

		return Response::json([
				'message' => 'Nutrition Daily data Added successfully.',
				'status_code' => 200,
			],200);
	}


	public function weekly()
	{
		$patientcode = Request::get('patient_code');
		$fromdate = Request::get('fromdate');
		$todate = Request::get('todate');
		$dietveg = Request::get('diet_veg');
		$dietnonveg = Request::get('diet_nonveg');
		$nonvegserves = Request::get('nonveg_serves');
		$vegserves = Request::get('veg_serves');
		$latitude = Request::get('latitude');
		$longitude = Request::get('longitude');
		$ip = Request::get('patient_ip');

		$nuw = new NutritionWeekly;
		$nuw->patient_code = $patientcode;
		$nuw->fromdate = $fromdate;
		$nuw->todate = $todate;
		$nuw->diet_veg = $dietveg;
		$nuw->diet_nonveg = $dietnonveg;
		$nuw->nonveg_serves = $nonvegserves;
		$nuw->veg_serves = $vegserves;
		$nuw->latitude = $latitude;
		$nuw->longitude = $longitude;
		$nuw->patient_ip = $ip;
		$nuw->save();

		return Response::json([
				'message' => 'Nutrition Weekly data Added.',
				'status_code' => 200
			],200);
	}


	public function monthly()
	{
		$patientcode = Request::get('patient_code');
		$monthname = Request::get('month_name');
		$dietveg1 = Request::get('diet_veg1');
		$dietnonveg1 = Request::get('diet_nonveg1');
		$nonvegserves1 = Request::get('nonveg_serves1');
		$vegserves1 = Request::get('veg_serves1');
		$dietveg2 = Request::get('diet_veg2');
		$dietnonveg2 = Request::get('diet_nonveg2');
		$nonvegserves2 = Request::get('nonveg_serves2');
		$vegserves2 = Request::get('veg_serves2');
		$dietveg3 = Request::get('diet_veg3');
		$dietnonveg3 = Request::get('diet_nonveg3');
		$nonvegserves3 = Request::get('nonveg_serves3');
		$vegserves3 = Request::get('veg_serves3');
		$dietveg4 = Request::get('diet_veg4');
		$dietnonveg4 = Request::get('diet_nonveg4');
		$nonvegserves4 = Request::get('nonveg_serves4');
		$vegserves4 = Request::get('veg_serves4');
		$latitude = Request::get('latitude');
		$longitude = Request::get('longitude');
		$ip = Request::get('patient_ip');

		$num = new NutritionMonthly;
		$num->patient_code = $patientcode;
		$num->month_name = $monthname;
		$num->diet_veg1 = $dietveg1;
		$num->diet_nonveg1 = $dietnonveg1;
		$num->nonveg_serves1 = $nonvegserves1;
		$num->veg_serves1 = $vegserves1;
		$num->diet_veg2 = $dietveg2;
		$num->diet_nonveg2 = $dietnonveg2;
		$num->nonveg_serves2 = $nonvegserves2;
		$num->veg_serves2 = $vegserves2;
		$num->diet_veg3 = $dietveg3;
		$num->diet_nonveg3 = $dietnonveg3;
		$num->nonveg_serves3 = $nonvegserves3;
		$num->veg_serves3 = $vegserves3;
		$num->diet_veg4 = $dietveg4;
		$num->diet_nonveg4 = $dietnonveg4;
		$num->nonveg_serves4 = $nonvegserves4;
		$num->veg_serves4 = $vegserves4;
		$num->latitude = $latitude;
		$num->longitude = $longitude;
		$num->patient_ip = $ip;
		$num->save();

		return Response::json([
			'message' => 'Nutrition Monthly data Added.',
			'status_code' => 200
			],200);
	}

	public function quarterly()
	{
		$patientcode = Request::get('patient_code');
        $quarter1 = Request::get('quarter1');
        $nonvegserves1 = Request::get('nonveg_serves1');
        $vegserves1 = Request::get('veg_serves1');
        $quarter2 = Request::get('quarter2');
        $nonvegserves2 = Request::get('nonveg_serves2');
        $vegserves2 = Request::get('veg_serves2');
        $quarter3 = Request::get('quarter3');
        $nonvegserves3 = Request::get('nonveg_serves3');
        $vegserves3 = Request::get('veg_serves3');
        $quarter4 = Request::get('quarter4');
        $nonvegserves4 = Request::get('nonveg_serves4');
        $vegserves4 = Request::get('veg_serves4');
		$latitude = Request::get('latitude');
		$longitude = Request::get('longitude');
		$ip = Request::get('patient_ip');

		$nuq = new NutritionQuarterly;
		$nuq->patient_code = $patientcode;
        $nuq->quarter1 = $quarter1;
        $nuq->nonveg_serves1 = $nonvegserves1;
        $nuq->veg_serves1 = $vegserves1;
        $nuq->quarter2 = $quarter2;
        $nuq->nonveg_serves2 = $nonvegserves2;
        $nuq->veg_serves2 = $vegserves2;
        $nuq->quarter3 = $quarter2;
        $nuq->nonveg_serves3 = $nonvegserves3;
        $nuq->veg_serves3 = $vegserves3;
        $nuq->quarter4 = $quarter4;
        $nuq->nonveg_serves4 = $nonvegserves4;
        $nuq->veg_serves4 = $vegserves4;
		$nuq->latitude = $latitude;
		$nuq->longitude = $longitude;
		$nuq->patient_ip = $ip;
		$nuq->save();

		return Response::json([
				'message' => 'Nutrition Quarterly data Added.',
				'status_code' => 200
			],200);
	}


}
