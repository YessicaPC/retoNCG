<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    //
    protected $primaryKey="id";
    protected $table = 'pacientes';
    protected $fillable =[
    	'nombre','Ap','Am','calle','colonia','ciudad','tel','genero','edad'
    ];
}
