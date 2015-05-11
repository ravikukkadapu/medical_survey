
<?php

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'users';
    public $primaryKey = 'id';
    protected $fillable = ['id','patient_code','patient_mail','token','patient_mobile','patient_password','surveytype','address','zipcode','latitude','longitude','patient_ip','timestamp'];
    public $timestamps = true;

}


