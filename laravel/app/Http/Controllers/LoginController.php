<?php

namespace App\Http\Controllers;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Log;
use App\User;

class LoginController extends Controller
{
    //
    public function viewLogin()
    {
        //? Aqui se hacen las transacciones con los modelos

        return view('components.login');
    }
    //* Iniciar sesion

    public function tryLogin(Request $request)
    {
        
        $validated = $request->validate([
             'name' => 'required',
             'password' => 'required',
        ]);

        //* Se cogen los input (nombre y contraseña)
        $credentials = request(['name', 'password']);

        //* Intenta logearse con los datos dados
        if (Auth::attempt(['name' => request(['name']), 'password' => request(['password'][0])])) 
        {
            //* Se logea
            $user = auth()->user()->name;
            
            return redirect('/');
            
        }
        else
        {
            //* No se ha logeado
            return back();
        }

    }

    public function Logout(Request $request)
    {
        
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

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
            $passwordUsuario = bcrypt(cleanInput($data['password'])); 

            $usuario = new User;
            

            $usuario->name = cleanInput($nombreUsuario);
            $usuario->password = $passwordUsuario;
            $usuario->email = cleanInput($emailUsuario);
            $usuario->save();

            return view('components.login');

            
            
        //}
            
    }

    public function recuperarContraseña()
    {
        //? Aqui se hacen las transacciones con los modelos

        return view('components.recuperar');
    }
}
