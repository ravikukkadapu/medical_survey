<?php

class SearchController extends \BaseController
{
	public function search()
	{
		return View::make('search');
	}

	public function searchpage()
    {
    $pcode = Request::get('code');
    $fromdate = Request::get('fromdate');
    $todate = Request::get('todate');
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
    $diettype = Request::get('diet_type');
    $veg=Request::get('veg');
    $nonveg=Request::get('nonveg');
    // $query = "SELECT patient_code,latitude,longitude FROM vw_searchdaily";
    $query = "SELECT * FROM vw_searchdaily";
    $query_length = strlen($query);

    if($pcode != '')
    {
        if(strlen($query) > $query_length)
        {
        $query .= " And patient_code = $pcode ";
        }
        else
        {
        $query .= " where patient_code = $pcode ";
        }
    }

    // if($fromdate != '' AND $todate != '')
    // {
    //     if(strlen($query) > $query_length)
    //     {
    //     $query .= " AND heartbeatcheck_date BETWEEN '$fromdate' AND '$todate'";
    //     }
    //     else
    //     {
    //     $query .= " WHERE heartbeatcheck_date BETWEEN '$fromdate' AND '$todate' ";
    //     }
    // }

    // if($minhb != '' AND $maxhb != '')
    // {
    //     if(strlen($query) > $query_length)
    //     {
    //     $query .= " AND heartbeat_value BETWEEN $minhb AND $maxhb ";
    //     }
    //     else
    //     {
    //     $query .= " WHERE heartbeat_value BETWEEN $minhb AND $maxhb ";
    //     }
    // }


    // if($minsystolic != '' AND $maxsystolic != '')
    // {
    //     if(strlen($query) > $query_length)
    //     {
    //         $query .= " AND bpsystolic_value BETWEEN $minsystolic AND $maxsystolic ";
    //     }
    //     else
    //     {
    //         $query .= " WHERE bpsystolic_value BETWEEN $minsystolic AND $maxsystolic ";
    //     }
    // }

    // if($mindiastolic != '' AND $maxdiastolic != '')
    // {
    //     if(strlen($query) > $query_length)
    //     {
    //         $query .= " AND bpdiastolic_value BETWEEN $mindiastolic AND $maxdiastolic ";
    //     }
    //     else
    //     {
    //         $query .= " WHERE bpdiastolic_value BETWEEN $mindiastolic AND $maxdiastolic ";
    //     }
    // }

    // if($minslf != '' AND $maxslf != '')
    // {
    //     if(strlen($query) > $query_length)
    //     {
    //         $query .= " AND bloodsugar_fasting BETWEEN $minslf AND $maxslf ";
    //     }
    //     else
    //     {
    //         $query .= " WHERE bloodsugar_fasting BETWEEN $minslf AND $maxslf ";
    //     }
    // }

    // if($minslr != '' AND $maxslr != '')
    // {
    //     if(strlen($query) > $query_length)
    //     {
    //         $query .= " AND bloodsugar_random BETWEEN $minslr AND $maxslr ";
    //     }
    //     else
    //     {
	   //      $query .= " WHERE bloodsugar_random BETWEEN $minslr AND $maxslr ";
    //     }
    // }

    // if($minslp != '' AND $maxslp != '')
    // {
    //     if(strlen($query) > $query_length)
    //     {
    //         $query .= " AND bloodsugar_postlunch BETWEEN $minslp AND $maxslp ";
    //     }
    //     else
    //     {
    //        $query .= " WHERE bloodsugar_postlunch BETWEEN $minslp AND $maxslp ";
    //     }
    // }

    // if($addr != '')
    // {
    //     if(strlen($query) > $query_length)
    //     {
    //         $query .= " AND address = '$addr' ";
    //     }
    //     else
    //     {
    //     	$query .= " WHERE address = '$addr' ";
    //     }
    // }

    if($veg == 'on' AND $nonveg == null )
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

    if( $veg == null AND $nonveg == 'on')
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

    if($veg == 'on' AND $nonveg == 'on')
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

    // if($diettype == 1)
    // {
    // if($veg == 'on' AND $nonveg == null )
    //     {
    //         if(strlen($query) > $query_length)
    //         {
    //             $query .= " AND fastveg_serves >=3 ";
    //         }
    //         else
    //         {
    //             $query .= " WHERE fastveg_serves >=3 ";
    //         }
    //     }

    // if( $veg == null AND $nonveg == 'on')
    //     {
    //         if(strlen($query) > $query_length)
    //         {
    //             $query .= " AND fastnonveg_serves >=3 ";
    //         }
    //         else
    //         {
    //             $query .= " WHERE fastnonveg_serves >=3 ";
    //         }
    //     }

    // if($veg == 'on' AND $nonveg == 'on')
    //     {
    //         if(strlen($query) > $query_length)
    //         {
    //             $query .= " AND fastveg_serves >=3 AND fastnonveg_serves >=3 ";
    //         }
    //         else
    //         {
    //             $query .= " WHERE fastveg_serves >=3 AND fastnonveg_serves >=3 ";
    //         }
    //     }
    // }
    // if($diettype == 2)
    // {
    // if($veg == 'on' AND $nonveg == null )
    //     {
    //         if(strlen($query) > $query_length)
    //         {
    //             $query .= " AND weekveg_serves >=3 ";
    //         }
    //         else
    //         {
    //             $query .= " WHERE weekveg_serves >=3 ";
    //         }
    //     }

    // if( $veg == null AND $nonveg == 'on')
    //     {
    //         if(strlen($query) > $query_length)
    //         {
    //             $query .= " AND weeknonveg_serves >=3 ";
    //         }
    //         else
    //         {
    //             $query .= " WHERE weeknonveg_serves >=3 ";
    //         }
    //     }

    // if($veg == 'on' AND $nonveg == 'on')
    //     {
    //         if(strlen($query) > $query_length)
    //         {
    //             $query .= " AND weekveg_serves >=3 AND weeknonveg_serves >=3 ";
    //         }
    //         else
    //         {
    //             $query .= " WHERE weekveg_serves >=3 AND weeknonveg_serves >=3 ";
    //         }
    //     }
    // }
    // if($diettype == 3)
    // {
    // if($veg == 'on' AND $nonveg == null )
    //     {
    //         if(strlen($query) > $query_length)
    //         {
    //             $query .= " AND monthveg_serves >=3 ";
    //         }
    //         else
    //         {
    //             $query .= " WHERE monthveg_serves >=3 ";
    //         }
    //     }

    // if( $veg == null AND $nonveg == 'on')
    //     {
    //         if(strlen($query) > $query_length)
    //         {
    //             $query .= " AND monthnonveg_serves >=3 ";
    //         }
    //         else
    //         {
    //             $query .= " WHERE monthnonveg_serves >=3 ";
    //         }
    //     }

    // if($veg == 'on' AND $nonveg == 'on')
    //     {
    //         if(strlen($query) > $query_length)
    //         {
    //             $query .= " AND monthveg_serves >=3 AND monthnonveg_serves >=3 ";
    //         }
    //         else
    //         {
    //             $query .= " WHERE monthveg_serves >=3 AND monthnonveg_serves >=3 ";
    //         }
    //     }
    // }
    // if($diettype == 4)
    // {
    // if($veg == 'on' AND $nonveg == null )
    //     {
    //         if(strlen($query) > $query_length)
    //         {
    //             $query .= " AND quarterveg_serves >=3 ";
    //         }
    //         else
    //         {
    //             $query .= " WHERE quarterveg_serves >=3 ";
    //         }
    //     }

    // if( $veg == null AND $nonveg == 'on')
    //     {
    //         if(strlen($query) > $query_length)
    //         {
    //             $query .= " AND quarternonveg_serves >=3 ";
    //         }
    //         else
    //         {
    //             $query .= " WHERE quarternonveg_serves >=3 ";
    //         }
    //     }

    // if($veg == 'on' AND $nonveg == 'on')
    //     {
    //         if(strlen($query) > $query_length)
    //         {
    //             $query .= " AND quarterveg_serves >=3 AND quarternonveg_serves >=3 ";
    //         }
    //         else
    //         {
    //             $query .= " WHERE quarterveg_serves >=3 AND quarternonveg_serves >=3 ";
    //         }
    //     }
    // }

    // if($pcode != '')
    // {
    //     if(strlen($query) > $query_length)
    //     {
    //     $query .= " And patient_code = $pcode ";
    //     }
    //     else
    //     {
    //     $query .= " where patient_code = $pcode ";
    //     }
    // }

if($fromdate != '' AND $todate != '')
{
    if($pcode != '')
    {
        if(strlen($query) > $query_length)
        {
        $query .= " And patient_code = $pcode ";
        }
        else
        {
        $query .= " where patient_code = $pcode ";
        }
    }

    if($minhb != '' AND $maxhb != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND heartbeat_value BETWEEN $minhb AND $maxhb AND heartbeatcheck_date BETWEEN '$fromdate' AND '$todate'";
        }
        else
        {
            $query .= " WHERE heartbeat_value BETWEEN $minhb AND $maxhb AND heartbeatcheck_date BETWEEN '$fromdate' AND '$todate'";
        }
    }

    if($minsystolic != '' AND $maxsystolic != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bpsystolic_value BETWEEN $minsystolic AND $maxsystolic AND bpcheck_date BETWEEN '$fromdate' AND '$todate'";
        }
        else
        {
            $query .= " WHERE bpsystolic_value BETWEEN $minsystolic AND $maxsystolic AND bpcheck_date BETWEEN '$fromdate' AND '$todate'";
        }
    }

    if($mindiastolic != '' AND $maxdiastolic != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bpdiastolic_value BETWEEN $mindiastolic AND $maxdiastolic AND bpcheck_date BETWEEN '$fromdate' AND '$todate'";
        }
        else
        {
            $query .= " WHERE bpdiastolic_value BETWEEN $mindiastolic AND $maxdiastolic AND bpcheck_date BETWEEN '$fromdate' AND '$todate'";
        }
    }

    if($minslf != '' AND $maxslf != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bloodsugar_fasting BETWEEN $minslf AND $maxslf AND bloodsugarcheck_date BETWEEN '$fromdate' AND '$todate'";
        }
        else
        {
            $query .= " WHERE bloodsugar_fasting BETWEEN $minslf AND $maxslf AND bloodsugarcheck_date BETWEEN '$fromdate' AND '$todate' ";
        }
    }

    if($minslr != '' AND $maxslr != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bloodsugar_random BETWEEN $minslr AND $maxslr AND bloodsugarcheck_date BETWEEN '$fromdate' AND '$todate' ";
        }
        else
        {
            $query .= " WHERE bloodsugar_random BETWEEN $minslr AND $maxslr AND bloodsugarcheck_date BETWEEN '$fromdate' AND '$todate' ";
        }
    }

    if($minslp != '' AND $maxslp != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bloodsugar_postlunch BETWEEN $minslp AND $maxslp AND bloodsugarcheck_date BETWEEN '$fromdate' AND '$todate' ";
        }
        else
        {
           $query .= " WHERE bloodsugar_postlunch BETWEEN $minslp AND $maxslp AND bloodsugarcheck_date BETWEEN '$fromdate' AND '$todate' ";
        }
    }
}

else
{
    if($pcode != '')
    {
        if(strlen($query) > $query_length)
        {
        $query .= " And patient_code = $pcode ";
        }
        else
        {
        $query .= " where patient_code = $pcode ";
        }
    }

    if($minhb != '' AND $maxhb != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND heartbeat_value BETWEEN $minhb AND $maxhb ";
        }
        else
        {
            $query .= " WHERE heartbeat_value BETWEEN $minhb AND $maxhb ";
        }
    }

    if($minsystolic != '' AND $maxsystolic != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bpsystolic_value BETWEEN $minsystolic AND $maxsystolic ";
        }
        else
        {
            $query .= " WHERE bpsystolic_value BETWEEN $minsystolic AND $maxsystolic ";
        }
    }

    if($mindiastolic != '' AND $maxdiastolic != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bpdiastolic_value BETWEEN $mindiastolic AND $maxdiastolic ";
        }
        else
        {
            $query .= " WHERE bpdiastolic_value BETWEEN $mindiastolic AND $maxdiastolic ";
        }
    }

        if($minslf != '' AND $maxslf != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bloodsugar_fasting BETWEEN $minslf AND $maxslf ";
        }
        else
        {
            $query .= " WHERE bloodsugar_fasting BETWEEN $minslf AND $maxslf ";
        }
    }

    if($minslr != '' AND $maxslr != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bloodsugar_random BETWEEN $minslr AND $maxslr ";
        }
        else
        {
            $query .= " WHERE bloodsugar_random BETWEEN $minslr AND $maxslr ";
        }
    }

    if($minslp != '' AND $maxslp != '')
    {
        if(strlen($query) > $query_length)
        {
            $query .= " AND bloodsugar_postlunch BETWEEN $minslp AND $maxslp ";
        }
        else
        {
           $query .= " WHERE bloodsugar_postlunch BETWEEN $minslp AND $maxslp ";
        }
    }


}
    // return $query;

    $result = DB::select($query);
    if($result == null)
    {
        return Response::json([
                'message' =>'No Patient Data found.',
                'status_code' => 201
        ],200);
    }
    else
    {
        return Response::json([
                'data' =>$result,
                'status_code' => 200
        ],200);
    }
}

}

