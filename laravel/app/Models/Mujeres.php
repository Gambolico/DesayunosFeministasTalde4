<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mujeres extends Model
{
        //La tabla que vamos a usar
        protected $table = 'mujeres';

        public function getMujeresInf()
        {   
            $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','')
            ->join('categories', 'users.idUser', '=', 'categories.user_id')
            ->get();
            return $mujeres;
        }

}    
