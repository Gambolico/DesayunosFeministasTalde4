<?php

namespace App\Models;
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

    public static function checkDesbloqueadas($user, $mujer)
    {
        $desbloqueada = mujeresdesbloqueadas::select('Id_Usuario','Id_Mujeres')
        ->where('Id_Usuario','=', $user, 'AND','Id_Mujeres','=', $mujer)
        ->get();
        return $desbloqueada;
    }

    
}
