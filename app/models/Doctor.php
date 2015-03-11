<?php

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctor';
    public $primaryKey = 'id';
    protected $fillable = ['id','doctor_name','mail','password','timestamp'];
    public $timestamps = true;

}
