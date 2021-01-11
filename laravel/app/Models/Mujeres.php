<?php

namespace App\Models;
use Log;
use Illuminate\Database\Eloquent\Model;

class Mujeres extends Model
{
        //La tabla que vamos a usar
        protected $table = 'mujeres';


        /* Tola aa inf de las mujeres, select all */
        public static function getMujeresInf()
        {
            $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
            ->orderByRaw('Mujeres_Id', 'asc')
            ->get();
            return $mujeres;
        }
        public function getBiografia($id)
        {   
            $mujeresBiografia = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
            ->where('Mujeres_Id=$id')
            ->get();
            return $mujeres;
        }


        /* Funcion para la filtracion de las cartas cuando hay ambitos y buscador*/
        public static function FiltrarMujeresInf(Request $respuesta,Request $ambitos){
            Log::debug($respuesta,$ambitos);
            $mujeres = Mujeres::where('Ambito_Id', 'like', '%'.$ambitos.'%')
            ->orWhere('Mujeres_Id', 'like', '%'.$respuesta.'%')
            ->orWhere('Nombre', 'like', '%'.$respuesta.'%')
            ->orWhere('Apellido', 'like', '%'.$respuesta.'%')
            ->orWhere('Fecha_Nacimiento', 'like', '%'.$respuesta.'%')
            ->orWhere('Zona_Geografica', 'like', '%'.$respuesta.'%')
            ->orderBy('Mujeres_Id','desc')
            ->get();
            
            return $mujeres;
        }
        /* Solo cuando filtre por busqueda */
        public static function FiltrarMujeresInfRes($respuesta){
            
                $mujeres = Mujeres::where('Mujeres_Id', 'like', '%'.$respuesta.'%')
            ->orWhere('Nombre', 'like', '%'.$respuesta.'%')
            ->orWhere('Apellido', 'like', '%'.$respuesta.'%')
            ->orWhere('Fecha_Nacimiento', 'like', '%'.$respuesta.'%')
            ->orWhere('Zona_Geografica', 'like', '%'.$respuesta.'%')
            ->orderBy('Mujeres_Id','desc')
            ->get();
            
            return $mujeres;
        }
        /* Solo para cuando solo se filtre por ambitos */
        public static function FiltrarMujeresInfAmbito($ambitos){
            if(!empty($ambitos)){
                $mujeres = Mujeres::where('Ambito_Id', 'like', '%'.$ambitos.'%')
                ->get();
            }
            return $mujeres;
        }


}    
