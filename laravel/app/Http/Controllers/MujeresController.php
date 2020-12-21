<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use App\Models\Ambitos;
use Illuminate\Http\Request;

class MujeresController extends Controller
{
    //
    public function coleccion()
    {
        $mujeres=Mujeres::first()->getMujeresInf();
        $ambitos=Ambitos::first()->getAmbitos();
        /* 
        Tambien se puede hacer asi
        return view('components.coleccion')->with('Mujeres', $mujeres); 
        */
        return view('components.coleccion',['Mujeres'=> $mujeres,'Ambitos'=> $ambitos]);

        
    }
    public function biografia($id)
    {
        $mujeresBiografia=Mujeres::first()->getMujeresBiografia($id);
        return view('components.coleccion',['Mujeres'=> $mujeresBiografia]);        
    }
}
