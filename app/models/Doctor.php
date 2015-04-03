<?php

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctor';
    public $primaryKey = 'id';
    protected $fillable = ['id','doctor_name','mail','password','doctor_mobile','specialization','address','timestamp'];
    public $timestamps = true;

}
