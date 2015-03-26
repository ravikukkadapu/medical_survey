<?php

use Illuminate\Database\Eloquent\Model;

class NutritionQuarterly extends Model
{
    protected $table = 'nutritionquarterly';
    public $primaryKey = 'id';
    protected $fillable = ['id','patient_code','year','quarter1_type','veg_serves1','nonveg_serves1','quarter2_type','veg_serves2','nonveg_serves2','quarter3_type','veg_serves3','nonveg_serves3','quarter4_type','veg_serves4','nonveg_serves4','latitude','longitude','patient_ip','timestamps'];
    public $timestamps = true;
}
