<?php

class SearchController extends \BaseController {


	public function search()
	{
		return View::make('search');
	}

	public function searchpage()
    {
    $minsystolic = Request::get('minsystolic');
    $maxsystolic = Request::get('maxsystolic');
    $mindiastolic = Request::get('mindiastolic');
    $maxdiastolic = Request::get('maxdiastolic');
    $minhb = Request::get('minhb');
    $maxhb = Request::get('maxhb');
    $minslf = Request::get('minslf');
    $maxslf = Request::get('maxslf');
    $minslr = Request::get('minslr');
    $maxslr = Request::get('maxslr');
    $minslp = Request::get('minslp');
    $maxslp = Request::get('maxslp');
    $addr = Request::get('address');
    $veg=Request::get('veg');
    $nonveg=Request::get('nonveg');
    $query = "select patient_code,latitude,longitude from vw_searchdaily";

    $query_length = strlen($query);

    if($minhb != '' and $maxhb != '')
    {
        $query .= " WHERE heartbeat_value BETWEEN $minhb and $maxhb ";
    }

    if($minsystolic != '' and $maxsystolic != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bpsystolic_value BETWEEN $minsystolic and $maxsystolic ";
        }
        else
        {
            $query .= " WHERE bpsystolic_value BETWEEN $minsystolic and $maxsystolic ";
        }
    }

    if($mindiastolic != '' and $maxdiastolic != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bpdiastolic_value BETWEEN $mindiastolic and $maxdiastolic";
        }
        else
        {
            $query .= " WHERE bpdiastolic_value BETWEEN $mindiastolic and $maxdiastolic ";
        }
    }

    if($minslf != '' and $maxslf != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bloodsugar_fasting BETWEEN $minslf and $maxslf ";
        }
        else
        {
            $query .= " WHERE bloodsugar_fasting BETWEEN $minslf and $maxslf ";
        }
    }

    if($minslr != '' and $maxslr != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bloodsugar_random BETWEEN $minslr and $maxslr ";
        }
        else
        {
	        $query .= " WHERE bloodsugar_random BETWEEN $minslr and $maxslr ";
        }
    }

    if($minslp != '' and $maxslp != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bloodsugar_postlunch BETWEEN $minslp and $maxslp ";
        }
        else
        {
           $query .= " WHERE bloodsugar_postlunch BETWEEN $minslp and $maxslp ";
        }
    }

    if($addr != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND address = '$addr' ";
        }
        else
        {
        	$query .= " WHERE address = '$addr' ";
        }
    }

    if($veg == 'on' and $nonveg == null)
        {
            if(strlen($query) > $query_length)
            {
                $query .= " AND veg_serves >=3 ";
            }
            else
            {
                $query .= " WHERE veg_serves >=3 ";
            }
        }

    if($veg == null and $nonveg == 'on')
        {
            if(strlen($query) > $query_length)
            {
                $query .= " AND nonveg_serves >=3 ";
            }
            else
            {
                $query .= " WHERE nonveg_serves >=3 ";
            }
        }

    if($veg == 'on' and $nonveg == 'on')
        {
            if(strlen($query) > $query_length)
            {
                $query .= " AND veg_serves >=3 AND nonveg_serves >=3 ";
            }
            else
            {
                $query .= " WHERE veg_serves >=3 AND nonveg_serves >=3 ";
            }
        }

    $result = DB::select($query);
    return Response::json([
				'data' =>$result,
				'status_code' => 200
		],200);
    }



}
