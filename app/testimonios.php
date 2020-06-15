<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimonios extends Model
{
    protected $fillable =[
    	'titulo','contenido','imagen'
    ];
}
