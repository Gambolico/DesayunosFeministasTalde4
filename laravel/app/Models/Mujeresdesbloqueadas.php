<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Log;

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
        log::debug('checkDesbloqueadas ' . $mujer);

        $desbloqueada = mujeresdesbloqueadas::select('Id_Usuario','Id_Mujeres')
        ->where('Id_Usuario','=', $user)
        ->where('Id_Mujeres','=', $mujer)
        ->get();
        return $desbloqueada;
    }

    
}
