<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use App\Models\Mujeresdesbloqueadas;
use App\Models\USuarios;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    //
    public function comojugar()
    {
        return view('components.comoJugar');
    }

    public function iniciojuego($modo)
    {
        return view('components.inicioJuego', ['modo' => $modo]);
    }

    public function elegirJuego()
    {
        return view('components.elegirJuego');
    }

    public function elegirModo()
    {
        return view('components.elegirModo');
    }

    public function parejas($modo)
    {
        
        if($modo == 'libre'){
            $mujeres=Mujeres::inRandomOrder()->limit(9)->get();
    
            return view('components.pareja', ['mujeres' => $mujeres]);
        }else{
            echo "el juego de historia pa";
            die();
        }

        
    }

    public function adivina()
    {
        return view('components.adivina');
    }

    public function saveMujer(Request $request)
    {   
        if(empty($desbloqueada)){
            $data = $request->input();

            try{
                $mujerDesbloqueada = new mujerDesbloqueada;

                $mujerDesbloqueada->Id_Usuario = $data['Id_Usuario'];
                $mujerDesbloqueada->Id_Mujeres = $data['Id_Mujeres'];
                $mujerDesbloqueada->save();

            }catch(Exception $e){
                
            }
        }
    }
}
