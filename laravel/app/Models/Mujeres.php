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

        /* Tola aa inf de las mujeres, select all */
        public static function getMujeresInf()
        {
            $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
            ->orderByRaw('Mujeres_Id', 'asc')
            ->get();
            return $mujeres;
        }

        /* Tola aa inf de las mujeres, select all */
        /* Funcion para la filtracion de las cartas*/
        public static function FiltrarMujeresInf($respuesta, $ambitos){
            /* HArtutako $ambitos, string bat da, array bihurtuko dugu -> */
            $myArray = explode(',', $ambitos);
            if(!empty($respuesta)){
                if(!empty($ambitos)){
                    /* Bilatzeko bi aldagaiak badaude */
                    $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
                            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
                            ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
                            ->where(function($query) use($respuesta)
                            {
                                $query->where('Nombre','like', '%'.$respuesta.'%')
                                    ->orWhere('Apellido','like', '%'.$respuesta.'%')
                                    ->orWhere('Zona_Geografica','like', '%'.$respuesta.'%');
                            })
                            ->whereIn('Ambito_Id', $myArray)
                            ->get();
                }
                else{
                    $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
                            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
                            ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
                            ->where('Nombre','like', '%'.$respuesta.'%')
                            ->orWhere('Apellido','like', '%'.$respuesta.'%')
                            ->orWhere('Zona_Geografica','like', '%'.$respuesta.'%')
                            ->get();
                }
            }
            else{
                if(!empty($ambitos)){
                    if($ambitos>1){
                        
                        $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
                            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
                            ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
                            ->whereIn('Ambito_Id', $myArray)
                            ->get();
                    }
                    else{
                        $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
                            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
                            ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
                            ->where('Ambito_Id','like', '%'.$ambitos.'%')
                            ->get();
                    }
                    
                }
                else{
                    $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
                    ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
                    ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
                    ->orderBy('Mujeres_Id', 'asc')
                    ->get();
                }
            }
            return $mujeres;
        }
        public static function filtrarId($id){
            $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
            ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
            ->where('Mujeres_Id','like','%'.$id.'%')
            ->get();
        }
            
            return $mujeres;
        }


}    
