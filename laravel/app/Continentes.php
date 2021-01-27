<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continentes extends Model
{
   //La tabla que vamos a usar
   protected $table = 'ambitos';
   public $timestamps = false;
   protected $fillable = [
       'Id_Continente','Nombre_Continente'
   ];

}
