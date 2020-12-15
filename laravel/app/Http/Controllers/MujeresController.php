<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use Illuminate\Http\Request;

class MujeresController extends Controller
{
    //

    public function coleccion()
    {
        $mujeres=Mujeres::first()->getMujeresInf();
        /* 
        Tambien se puede hacer asi
        return view('components.coleccion')->with('Mujeres', $mujeres); 
        */

        return view('components.coleccion',['Mujeres'=> $mujeres]);
    }
}
