<?php

namespace App\Http\Controllers;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Log;

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
        
        // $validated = $request->validate([
        //     'username' => 'required|exists:Usuarios,usuario',
        //     'password' => 'required',
        // ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            Log::debug($request->user());

            //$request->session()->regenerate
            return redirect()->intended('dashboard');
        }

        Log::debug($request->user());
                
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

        // $nombreUsuario = $data['username'];
        // $passwordUsuario = Hash::make($data['password']); 
        
        // $usuario = new Usuarios;

        // $usuario = Usuarios::where('Usuario', '=', cleanInput($usuario->Usuario))->first();



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
           try {

            $usuario->Usuario = cleanInput($nombreUsuario);
            $usuario->Contraseña = cleanInput($passwordUsuario);
            $usuario->Email = cleanInput($emailUsuario);
            $usuario->save();

            return view('components.login');

           } catch (\Throwable $th) {
               
           }
            
        //}
            
    }

    public function recuperarContraseña()
    {
        //? Aqui se hacen las transacciones con los modelos

        return view('components.recuperar');
    }
}
