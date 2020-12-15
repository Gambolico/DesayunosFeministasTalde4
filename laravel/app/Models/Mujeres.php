<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mujeres extends Model
{
    //La tabla que vamos a usar
    protected $table = 'mujeres';

    public function getMujeresInf()
        {   
            $mujeres = Mujeres::get();
            return $mujeres;
        }

}    
