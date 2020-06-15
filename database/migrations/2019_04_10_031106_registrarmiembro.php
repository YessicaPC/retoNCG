<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Registrarmiembro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('miembros', function(Blueprint $table){
            $table->increments('id_admin');
            $table->string('name');
            $table->string('ap');
            $table->string('am');
            $table->string('puesto');
            $table->string('rol');
            $table->string('correo')->unique();
            $table->string('pass');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('miembros');
    }
}