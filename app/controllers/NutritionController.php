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
		$dietveg = Request::get('diet_veg');
		$dietnonveg = Request::get('diet_nonveg');
		$nonvegserves = Request::get('nonveg_serves');
		$vegserves = Request::get('veg_serves');
		$latitude = Request::get('latitude');
		$longitude = Request::get('longitude');
		$ip = Request::get('patient_ip');
		$val = explode('-',$monthname);
		$month = $val[0];
		$year = $val[1];


		$num = new NutritionMonthly;
		$num->patient_code = $patientcode;
		$num->month = $val[0];
		$num->year = $val[1];
		$num->diet_veg = $dietveg;
		$num->diet_nonveg = $dietnonveg;
		$num->nonveg_serves = $nonvegserves;
		$num->veg_serves = $vegserves;
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
		$year = Request::get('year');
        $quarter1 = Request::get('serve_type1');
        $diettype1 = Request::get('diet_type1');
        $quarter2 = Request::get('serve_type2');
        $diettype2 = Request::get('diet_type2');
        $quarter3 = Request::get('serve_type3');
        $diettype3 = Request::get('diet_type3');
        $quarter4 = Request::get('serve_type4');
        $diettype4 = Request::get('diet_type4');
		$latitude = Request::get('latitude');
		$longitude = Request::get('longitude');
		$ip = Request::get('patient_ip');

		$nuq = new NutritionQuarterly;
		$nuq->patient_code = $patientcode;
		$nuq->year = $year;
        $nuq->serve_type1 = $quarter1;
        $nuq->diet_type1 = $diettype1;
        $nuq->serve_type2 = $quarter2;
        $nuq->diet_type2 = $diettype2;
        $nuq->serve_type3 = $quarter3;
        $nuq->diet_type3 = $diettype3;
        $nuq->serve_type4 = $quarter4;
        $nuq->diet_type4 = $diettype4;
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
