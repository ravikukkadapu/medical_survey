<?php

use Illuminate\Database\Eloquent\Model;

class NutritionWeekly extends Model
{
    protected $table = 'nutritionweekly';
    public $primaryKey = 'id';
    protected $fillable = ['id','patient_code','fromdate','todate','veg_serves','diet_veg','nonveg_serves','diet_nonveg','latitude','longitude','address','patient_ip','timestamp'];
    public $timestamps = true;
}

