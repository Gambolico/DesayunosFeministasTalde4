<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MujeresController extends Controller
{
    //
    public function iniciojuego()
    {
        return view('components.inicioJuego');
    }

    public function elegirJuego()
    {
        return view('components.elegirJuego');
    }

    public function elegirModo()
    {
        return view('components.elegirModo');
    }

    public function parejas()
    {
        return view('components.pareja');
    }

    public function adivina()
    {
        return view('components.adivina');
    }

    public function coleccion()
    {
        return view('components.coleccion');
    }
}
