<?php

namespace App\Models;
use Log;
use Illuminate\Database\Eloquent\Model;

class Mujeres extends Model
{
        //La tabla que vamos a usar
        protected $table = 'mujeres';

        public function getBiografia($id)
        {   
            $mujeresBiografia = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
            ->where('Mujeres_Id=$id')
            ->get();
            return $mujeres;
        }
/* 
 $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color','Id_Ambito')
                            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
                            ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
                             */
        /* Tola aa inf de las mujeres, select all */
        /* Funcion para la filtracion de las cartas*/
        public static function FiltrarMujeresInf($respuesta, $ambitos){
            if(!empty($respuesta)){
                if(!empty($ambitos)){
                    
                    $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
                            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
                            ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
                            ->whereIn('Ambito_Id', [$ambitos])
                            ->where(function($query) use($respuesta)
                            {
                                $query->where('Nombre','like', '%'.$respuesta.'%')
                                    ->orWhere('Apellido','like', '%'.$respuesta.'%')
                                    ->orWhere('Zona_Geografica','like', '%'.$respuesta.'%');
                            })
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
                            ->whereIn('Ambito_Id', $ambitos)
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
            
}


