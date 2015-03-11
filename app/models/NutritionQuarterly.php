<?php

use Illuminate\Database\Eloquent\Model;

class NutritionQuarterly extends Model
{
    protected $table = 'nutritionquarterly';
    public $primaryKey = 'id';
    protected $fillable = ['id','patient_code','quarter1','veg_serves1','nonveg_serves1','quarter2','veg_serves2','nonveg_serves2','quarter3','veg_serves3','nonveg_serves3','quarter4','veg_serves4','nonveg_serves4','latitude','longitude','patient_ip','timestamps'];
    public $timestamps = true;
}
