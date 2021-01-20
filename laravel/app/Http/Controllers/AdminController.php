<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use App\User;
use App\Models\Ambitos;
use Illuminate\Http\Request;
use Log;


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

        public function AñadirMujer(Request $request){
            $data = $request->input();

            $Nombre = $data['Nombre'];
            $Apellido = $data['Apellido'];
            $Fecha_Nacimiento = $data['Fecha_Nacimiento'];
            $Fecha_Muerte = $data['Fecha_Muerte'];
            $Lore_Esp = $data['Lore_Esp'];
            $Zona_Geografica = $data['Zona_Geografica'];
            $Continente_ID = $data['Continente_ID'];
            $Ambito_Id = $data['Ambito_Id'];

            $mujer = new Mujeres;

            $mujer->Nombre = $Nombre;
            $mujer->Apellido = $Apellido;
            $mujer->Fecha_Nacimiento = $Fecha_Nacimiento;
            $mujer->Fecha_Muerte = $Fecha_Muerte;
            $mujer->Lore_Esp = $Lore_Esp;
            $mujer->Zona_Geografica = $Zona_Geografica;
            $mujer->Continente_ID = $Continente_ID;
            $mujer->Img_Ruta = '';
            $mujer->Ambito_Id = $Ambito_Id;

            $mujer->save();
            return redirect()->back()->with('error','Se ha añadido la mujer correctamente.');
        }

    public function viewEliminarMujeres() {
        $Mujeres=Mujeres::getMujeresInf();

        return view('components.AdminArea.eliminarMujeres')->with('Mujeres', $Mujeres);
    }

        public function eliminarMujer($id) {
            Mujeres::eliminarMujerporID($id);

            return redirect()->back()->with('error','Se ha eliminado la mujer correctamente.');
        }

    public function viewEditarUsuarios() {
        $Users=User::getUsuariosInf();

        return view('components.AdminArea.editarUsuarios')->with('Users', $Users);
    }

    public function viewAgregarUsuarios(){
        return view('components.AdminArea.agregarUsuarios');
    }


        public function editarUsuarios($id) {
            User::hacerUsuarioAdmin($id);

            return redirect()->back()->with('error','El usuario ha sido actualizado correctamente.');
        }

        public function eliminarUsuarios($id) {
            User::eliminarUsuarioPorID($id);

            return redirect()->back()->with('error','El usuario ha sido eliminado correctamente.');
        }

        public function agregarUsuarios(Request $request) {

            $validated = $request->validate([
                    'username' => 'required|unique:Users,name',
                    'password' => 'required|min:8|confirmed',
                    'email' => 'required|email|unique:Users,email',
                    'Admin' => 'required'
                ]);


            $data = $request->input();
                
            $nombreUsuario = $data['username'];
            $emailUsuario = $data['email'];
            $passwordUsuario = bcrypt(cleanInput($data['password']));
            $is_admin = $data['Admin'];

            $usuario = new User;
            

            $usuario->name = cleanInput($nombreUsuario);
            $usuario->password = $passwordUsuario;
            $usuario->email = cleanInput($emailUsuario);
            $usuario->is_admin=$is_admin;
            $usuario->save();
            
            return redirect()->back()->with('error','El usuario ha sido agregado correctamente.');
        }
    }