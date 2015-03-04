<?php

use Illuminate\Database\Eloquent\Model;

class NutritionWeekly extends Model
{
    protected $table = 'nutritionweekly';
    public $primaryKey = 'id';
    protected $fillable = ['id', 'patient_code', 'veg_serves','nonveg_serves', 'diet_veg', 'diet_nonveg','patient_ip','timestamp'];
    public $timestamps = true;
}
