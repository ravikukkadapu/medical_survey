<?php

use Illuminate\Database\Eloquent\Model;

class NutritionFast extends Model
{
    protected $table = 'nutritionfast';
    public $primaryKey = 'id';
    protected $fillable = ['id', 'day', 'diet_veg', 'diet_nonveg', 'diet_type','patient_ip' 'patient_code','veg_serves','nonveg_serves', 'timestamp'];
    public $timestamps = true;
}
