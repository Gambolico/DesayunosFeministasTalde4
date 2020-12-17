<?php

namespace App\Http\Controllers;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Http\Response;

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

            $data = $request->input();

            if(!empty($data['username']) && !empty($data['email']) && !empty($data['password']) && !empty($data['passwordR']))
            {

                

            }


            $usuario = new Usuarios;
           
            $usuario->Usuario = $data['username'];
            $usuario->Contraseña = Hash::make($data['password']);
            $usuario->save();

        //}
            
    }

}
