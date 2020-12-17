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
            $emailUsuario = $data['email'];
            $passwordUsuario = Hash::make($data['password']); 

            $usuario = new Usuarios;
           
            $usuario->Usuario = cleanInput($nombreUsuario);
            $usuario->Contraseña = cleanInput($passwordUsuario);
            $usuario->Email = cleanInput($emailUsuario);
            $usuario->save();

        //}
            
    }

    public function recuperarContraseña()
    {
        //? Aqui se hacen las transacciones con los modelos

        return view('components.recuperar');
    }
}
