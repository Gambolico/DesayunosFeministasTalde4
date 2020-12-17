<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ambitos extends Model
{
        //La tabla que vamos a usar
        protected $table = 'ambitos';

        public function getAmbitos()
        {   
            $ambitos = Ambitos::select('Id_Ambito','Nombre_Ambito')
            ->get();
            return $ambitos;
        }
}
