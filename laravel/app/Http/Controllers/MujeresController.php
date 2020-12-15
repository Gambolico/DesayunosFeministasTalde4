<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use Illuminate\Http\Request;

class MujeresController extends Controller
{
    //

    public function coleccion()
    {
        return view('components.coleccion');
    }
}
