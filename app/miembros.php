<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class miembros extends Model
{
    //
    protected $fillable =[
    	'name','ap','am','puesto','rol','correo','pass'
    ];

  
}
