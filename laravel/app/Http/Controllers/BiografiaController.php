<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use Illuminate\Http\Request;
use Log;
class BiografiaController extends Controller
{

    public function datosBiografia($id)
    {
        
            $data =Mujeres::filtrarId($id);
            
            return view('components.Biografia.biografia')->with('Mujeres', $data);
    }
}
