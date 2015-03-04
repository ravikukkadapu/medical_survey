<?php

use Illuminate\Database\Eloquent\Model;

class NutritionDaily extends Model
{
    protected $table = 'nutritiondaily';
    public $primaryKey = 'id';
    protected $fillable = ['id','patient_code','sunday_diet','sundaydiet_type','monday_diet','mondaydiet_type','tuesday_diet','tuesdaydiet_type','wednesday_diet', 'wednesdaydiet_type','thursday_diet','thursdaydiet_type','friday_diet','fridaydiet_type','saturday_diet','saturdaydiet_type','veg_serves','nonveg_serves','patient_ip','timestamps'];
    public $timestamps = true;
}



