<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambitos extends Model
{
        //La tabla que vamos a usar
        protected $table = 'ambitos';

        public function getAmbitos()
        {   
            $ambitos = Ambitos::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito')
            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
            ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
            ->orderByRaw('Mujeres_Id asc') 
            ->get();
            return $ambitos;
        }
}
