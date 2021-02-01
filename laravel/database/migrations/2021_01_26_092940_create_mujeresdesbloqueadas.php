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
        Schema::enableForeignKeyConstraints();
        Schema::create('mujeresdesbloqueadas', function (Blueprint $table) {
            $table->increments('Id_Desbloqueadas')->unique();
            $table->foreignId('Id_Usuario')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->integer('Id_Mujeres')->unsigned();
            $table->timestamps();
        });
        Schema::table('mujeresdesbloqueadas',function($table){
            $table->foreign('Id_Mujeres')->references('Mujeres_Id')->on('mujeres')->onDelete('CASCADE')->onUpdate('CASCADE');
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
