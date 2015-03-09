<?php

use Illuminate\Database\Eloquent\Model;

class Diagnostics extends Model
{
    protected $table = 'diagnostics';
    public $primaryKey = 'id';
    protected $fillable = ['id','patient_code','heartbeat_value','heartbeatcheck_date','bp_value','bpcheck_date','bloodsugar_fasting','bloodsugar_random','bloodsugar_postlunch', 'bloodsugarcheck_date','patient_ip','timestamp'];
     public $timestamps = true;
}
