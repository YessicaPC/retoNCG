<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegistrarPaciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pacientes', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('Ap');
            $table->string('Am');
            $table->string('calle');
            $table->string('colonia');
            $table->string('ciudad');
            $table->integer('tel');
            $table->string('genero');
            $table->integer('edad');
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
        Schema::dropIfExists('pacientes');
    }
}
