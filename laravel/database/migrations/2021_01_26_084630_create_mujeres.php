<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMujeres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            // The "users" table exists...
            Schema::create('mujeres', function (Blueprint $table) {
            $table->increments('Mujeres_id')->unique();
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Fecha_Nacimiento');
            $table->string('Fecha_Muerte');
            $table->string('Lore_Esp',1000);
            $table->string('Zona_Geografica');
            $table->integer('Continente_Id')->references('Id_Continente')->on('continentes');
            $table->string('Img_Ruta',300);
            $table->string('Img_Fefault',300);
            $table->string('Enlace_Referencia',250);
            $table->integer('Ambito_Id')->references('Id_Ambito')->on('ambitos');
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
        Schema::dropIfExists('mujeres');
    }
}
