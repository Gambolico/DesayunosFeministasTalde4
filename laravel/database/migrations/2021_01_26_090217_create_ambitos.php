<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbitos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambitos', function (Blueprint $table) {
            // The "users" table exists...
                $table->increments('Id_Ambito')->unique();
                $table->string('Nombre_Ambito');
                $table->string('Cod_Color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambitos');
    }
}
