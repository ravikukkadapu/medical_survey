<?php

use Illuminate\Database\Eloquent\Model;

class NutritionMonthly extends Model
{
    protected $table = 'nutritionmonthly';
    public $primaryKey = 'id';
    // protected $fillable = ['id','patient_code','month_name','diet_veg1','diet_nonveg1','nonveg_serves1','veg_serves1','diet_veg2','diet_nonveg2','nonveg_serves2','veg_serves2','diet_veg3','diet_nonveg3','nonveg_serves3','veg_serves3','diet_veg4','diet_nonveg4','nonveg_serves4','veg_serves4','latitude','longitude','patient_ip','timestamps'];
    protected $fillable = ['id','patient_code','month_name','diet_veg','diet_nonveg','nonveg_serves','veg_serves','latitude','longitude','patient_ip','timestamps'];
    public $timestamps = true;
}
