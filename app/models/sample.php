<?php

use Illuminate\Database\Eloquent\Model;

class sample extends Model
{
    protected $table = 'sample';
    public $primaryKey = 'id';
    protected $fillable = ['id','code','image','timestamp'];
     public $timestamps = false;
}

