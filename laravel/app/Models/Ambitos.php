<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambitos extends Model
{
        //La tabla que vamos a usar
        protected $table = 'ambitos';

        public function getAmbitos()
        {   
            $ambitos = Ambitos::get();
            return $ambitos;
        }
}
