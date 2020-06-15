<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id_noticia');
            $table->string('titulo');
            $table->string('contenido');
            $table->dateTimeTz('fecha');
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
      Schema::dropIfExists('comentarios');
    }
}
