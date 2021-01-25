<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
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

            return redirect('/'); 
            
        }
        elseif(Auth::attempt(['name' => request(['name']), 'password' => request(['password'][0])]))
        {

        }
        else
        {
            return redirect()->back()
                ->with('error','Las creedenciales no coinciden.');
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
                    'username' => 'required|unique:Users,name',
                    'password' => 'required|min:8|confirmed',
                    'email' => 'required|email|unique:Users,email'
                ]);


            $data = $request->input();
                
            $nombreUsuario = $data['username'];
            $emailUsuario = $data['email'];
            $passwordUsuario = bcrypt(cleanInput($data['password'])); 

            $usuario = new User;
            

            $usuario->name = cleanInput($nombreUsuario);
            $usuario->password = $passwordUsuario;
            $usuario->email = cleanInput($emailUsuario);
            $usuario->is_admin=0;
            $usuario->save();
            
            Auth::loginUsingId($usuario->id);
            return redirect('/');

        //}
            
    }

    public function forgotPassword()
    {
        //? Aqui se hacen las transacciones con los modelos

        return view('auth.passwords.email');
    }

    public function validateResetPassword(Request $request)
    {
        //? Aqui se hacen las transacciones con los modelos

        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);

        return view('auth.passwords.reset');
    }

    public function resetPassword($token) {
        return view('auth.passwords.reset', ['token' => $token]);
    }

    public function resetPasswordEmail(Request $request) {

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
    
            

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
    
                $user->setRememberToken(Str::random(64));
    
                event(new PasswordReset($user));
            }
        );
    
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }

}
