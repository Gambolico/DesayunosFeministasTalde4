<?php

namespace App\Http\Controllers;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    //
    public function viewLogin()
    {
        //? Aqui se hacen las transacciones con los modelos

        return view('components.login');
    }

    public function viewRegister()
    {
        return view('components.register');
    }

    public function createAccount(Request $request)
    {

        //$usuario=Usuarios::first()->checkUsername($_POST['username']);


        //* Comprobamos que el usuario no exista
        //if(!empty($usuario))
        //{

            $validated = $request->validate([
                    'username' => 'required|unique:Usuarios,usuario',
                    'password' => 'required|min:8|confirmed',
                    'email' => 'required|email|unique:Usuarios,email'
                ]);


            $data = $request->input();
                
                $nombreUsuario = $data['username'];

                if (Usuarios::where('Usuario', '=', $data['username'])->exists()) {
                    //? El usuario existe



                }
                else
                {
                    //? El usuario no existe (se sigue con el registro)

                }
                

            

            $usuario = new Usuarios;

            var_dump($usuario);
           
            $usuario->Usuario = $data['username'];
            $usuario->Contraseña = Hash::make($data['password']);
            $usuario->Email = $data['email'];
            $usuario->save();

        //}
            
    }

    public function recuperarContraseña()
    {
        //? Aqui se hacen las transacciones con los modelos

        return view('components.recuperar');
    }
}
