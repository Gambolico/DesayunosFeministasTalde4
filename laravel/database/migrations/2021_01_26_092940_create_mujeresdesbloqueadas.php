<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMujeresdesbloqueadas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mujeresdesbloqueadas', function (Blueprint $table) {
            $table->increments('Id_Desbloqueadas')->unique();
            $table->string('Id_Usuario')->references('id')->on('users');
            $table->string('Id_Mujeres')->references('Mujeres_Id')->on('mujeres');
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
        Schema::dropIfExists('mujeresdesbloqueadas');
    }
}
