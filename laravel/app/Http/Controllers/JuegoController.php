<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use App\Models\Mujeresdesbloqueadas;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Log;

class JuegoController extends Controller
{
    //
    public function comojugar()
    {
        return view('components.comoJugar');
    }

    public function iniciojuego($modo)
    {
        //* Si el modo de juego es historia, tiene que estar logeado
        if($modo == 'historia'){

            if(auth()->check()){
                //* El susuario esta logeado
                return view('components.inicioJuego', ['modo' => $modo]);

            }else{
                //* No esta logeado, redirige a login

                return redirect('/login')->with('error', 'Tienes que estar logeado');
            }

        }else{
            return view('components.inicioJuego', ['modo' => $modo]);
        }

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
    
            return view('components.pareja', ['modo' => $modo,'mujeres' => $mujeres]);
        }elseif ($modo == 'historia') {
            if(auth()->check()){
                //* El susuario esta logeado

            }else{
                //* No esta logeado, redirige a login

                return view('components.login');
            }

        }

        
    }

    public function adivina()
    {
        return view('components.adivina');
    }

    public static function saveMujer($idUsuario, $idMujer)
    {   
        $desbloqueada = Mujeresdesbloqueadas::checkDesbloqueadas($idUsuario, $idMujer);

        

        if(empty($desbloqueada)){

            try{
                $mujerDesbloqueada = new Mujeresdesbloqueadas;

                $mujerDesbloqueada->Id_Usuario = $idUsuario;
                $mujerDesbloqueada->Id_Mujeres = $idMujer;



                $mujerDesbloqueada->save();

            }catch(Exception $e){
                
            }
        }
    }
}
