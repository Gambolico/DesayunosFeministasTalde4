<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use App\User;
use App\Models\Ambitos;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //? Creo que el request no hace falta por que no viene de POST
    public function index(Request $request)
    {

        //? No entiendo lo que son estas dos lineas, como que se intentan coger 
        //? dos valores del request, pero en este caso no hay request
        // $nombre = $request->get('buscarpor');
        // $tipo = $request->get('tipo');


        //? La llamada a la vista estaba mal, primero por que se le passa un compact de mujeres (no entiendo lo que es)
        //? pero supongo que es un array de mujeres (no esta mal, se puede pasar info asi, pero no hace falta aqui (creo))
        // return view('components.admin', compact('Mujeres'));

        //? La ruta en si de la vista estaba mal, hay que poner desde la carpeta components todas las carpetas que haya dentro
        //? separadas por puntos, en este caso la ruta era components->AdminArea y dentro de AdminArea el archivo admin.blade.php
        return view('components.AdminArea.admin');

    }

    public function viewAñadirMujeres(){
        return view('components.AdminArea.añadirMujeres');
    }

    public function viewEliminarMujeres() {
        $Mujeres=Mujeres::getMujeresInf();

        return view('components.AdminArea.eliminarMujeres')->with('Mujeres', $Mujeres);
    }

        public function eliminarMujer($id) {
            Mujeres::eliminarMujerporID($id);

            return back();
        }

    public function viewEditarUsuarios() {
        $Users=User::getUsuariosInf();

        return view('components.AdminArea.editarUsuarios')->with('Users', $Users);
    }

        public function editarUsuarios($id) {
            User::hacerUsuarioAdmin($id);

            return back();
        }

        public function eliminarUsuarios($id) {
            User::eliminarUsuarioPorID($id);

            return back();
        }
    
}
