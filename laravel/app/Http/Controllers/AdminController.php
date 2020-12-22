<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $nombre = $request->get('buscarpor');
        $tipo = $request->get('tipo');
       
        return view('components.admin', compact('Mujeres'));

    }
}
