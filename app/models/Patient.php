
<?php

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'users';
    public $primaryKey = 'id';
    protected $fillable = ['id', 'patient_code', 'patient_mail', 'patient_mobile', 'patient_password', 'patient_ip','timestamp'];
    public $timestamps = false;

}
