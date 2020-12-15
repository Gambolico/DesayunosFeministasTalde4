<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        //? Aqui se hacen las transacciones con los modelos

        return view('components.login');
    }

    public function register()
    {
        return view('components.register');
    }
}
