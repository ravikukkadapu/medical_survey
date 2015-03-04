<?php

use Illuminate\Database\Eloquent\Model;

class Diagnostics extends Model
{
    protected $table = 'diagnostics';
    public $primaryKey = 'id';
    protected $fillable = ['id','patient_code','bp_value','bpcheck_date','heartbeat_value','heartbeatcheck_date','sugarlevel_value', 'sugarlevelcheck_date','timestamp'];
     public $timestamps = false;
}
