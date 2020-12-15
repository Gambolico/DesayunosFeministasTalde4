<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use App\Models\Mujeresdesbloqueadas;
use App\Models\USuarios;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    //
    public function comojugar()
    {
        return view('components.comoJugar');
    }

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
}
