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

        /* La informacion de las mujeres */
        public static function getMujeresInf() {
            $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
            ->orderByRaw('Mujeres_Id', 'asc')
            ->get();
            return $mujeres;
        }

        /* Añadir Mujeres */
        public static function añadirMujer($id) {
            Mujeres::select('*')->where('Mujeres_Id', '=', $id)->delete(); 
        }

        /* Eliminar Mujeres */
        public static function eliminarMujerporID($id) {
            Mujeres::select('*')->insert([
                'Mujeres_Id' => 'jamon']);
        }


        /* Tola aa inf de las mujeres, select all */
        /* Funcion para la filtracion de las cartas*/
        public static function FiltrarMujeresInf($respuesta, $ambitos,$cant,$ordenarPor){

            /* HArtutako $ambitos, string bat da, array bihurtuko dugu -> */
            $myArray = explode(',', $ambitos);
            Log::debug($cant);
            if($cant==0){
                $cantM=Mujeres::getMujeresInf();
                $cant=$cantM->count();
            }
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
                            ->orderBy($ordenarPor)
                            ->paginate($cant);
                }
                else{
                    $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
                            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
                            ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
                            ->where('Nombre','like', '%'.$respuesta.'%')
                            ->orWhere('Apellido','like', '%'.$respuesta.'%')
                            ->orWhere('Zona_Geografica','like', '%'.$respuesta.'%')
                            ->orderBy($ordenarPor,'asc')
                            ->paginate($cant);
                }
            }
            else{
                if(!empty($ambitos)){
                    if($ambitos>1){
                        
                        $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
                            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
                            ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
                            ->whereIn('Ambito_Id', $myArray)
                            ->orderBy($ordenarPor,'asc')
                            ->paginate($cant);
                    }
                    else{
                        $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
                            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
                            ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
                            ->whereIn('Ambito_Id', $myArray)
                            ->orderBy($ordenarPor,'asc')
                            ->paginate($cant);
                    }
                    
                }
                else{
                    $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
                    ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
                    ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
                    ->orderBy($ordenarPor,'asc')
                    ->paginate($cant);
                }
            }
            return $mujeres;
                
        }
        public static function filtrarId($id){
            $mujeres = Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','ambitos.Cod_Color')
            ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
            ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
            ->where('Mujeres_Id',$id)
            ->get();
            Log::debug($mujeres);
            return $mujeres;
        }
            
}


