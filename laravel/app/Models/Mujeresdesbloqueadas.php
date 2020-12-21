<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Mujeresdesbloqueadas extends Model
{
    //La tabla que vamos a usar
    protected $table = 'mujeresdesbloqueadas';
    
    public $timestamps = false;

    protected $fillable = [
        'idUsuario',
        'Mujer',
    ];

    public function checkDesbloqueadas($user, $mujer)
    {
        $desbloqueada = mujeresdesbloqueadas::select('Id_Usuario','Id_Mujeres')
        ->where('Id_Usuario','=', $use, 'AND','Id_Mujeres','=', 'Id_Mujeres')
        ->get();
        return $desbloqueada;
    }

    
}
