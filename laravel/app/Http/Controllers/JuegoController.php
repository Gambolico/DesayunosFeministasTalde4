<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use App\Models\Mujeresdesbloqueadas;
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
        
        if ($modo == 'historia') {
            if(auth()->check()){


                $mujeres = Mujeresdesbloqueadas::checkMujeresNoDesbloqueadasByID(auth()->user()->id);

                //* El susuario esta logeado
                // $mujeres=Mujeres::inRandomOrder()->limit(8)->get();
    
                if($mujeres){
                    return view('components.pareja', ['modo' => $modo,'mujeres' => $mujeres]);
                }
                else
                {
                    return redirect()->route('coleccion', [auth()->user()->id]);
                }

            }else{
                //* No esta logeado, redirige a login

                return view('components.login')->with('error', 'Tienes que estas logeado para jugar al modo historia.');
            }

        }
        else
        {
            $mujeres=Mujeres::inRandomOrder()->limit(8)->get();
            return view('components.pareja', ['modo' => $modo,'mujeres' => $mujeres]);
        }

        
    }

    public function adivina()
    {
        return view('components.adivina');
    }

    public function saveMujer(Request $request)
    {   
        if($request['modo']=='historia')
        {
            $idMujer=$_POST['idMujer'];
            $idUsuario = auth()->user()->id;

            $desbloqueada = Mujeresdesbloqueadas::checkMujerDesbloqueada($idUsuario, $idMujer);

            if($desbloqueada->count()==0){
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

    public static function desbloquearMujeres($postData)
    {   
        $desbloqueada = Mujeresdesbloqueadas::checkMujerDesbloqueada($idUsuario, $idMujer);

        if($desbloqueada->count()==0){
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
