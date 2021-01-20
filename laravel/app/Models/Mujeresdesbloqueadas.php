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

    public static function checkMujerDesbloqueada($user, $mujer)
    {
        $desbloqueada = mujeresdesbloqueadas::select('Id_Usuario','Id_Mujeres')
        ->where('Id_Usuario','=', $user)
        ->where('Id_Mujeres','=', $mujer)
        ->get();
        return $desbloqueada;
    }

    public static function checkMujeresNoDesbloqueadasByID($user)
    {
        $collection = collect();
        $noDesbloqueadas = Mujeres::inRandomOrder()
            ->whereNOTIn('Mujeres_Id',function($query) use ($user) {
               $query->select('Id_Mujeres')->from('mujeresdesbloqueadas')->where('Id_Usuario','=',$user);
            })
            ->limit(8)->get();

            foreach ($noDesbloqueadas as $mujer)
            $collection->push($mujer);
            
            if (count($noDesbloqueadas)==0){
                return false;
            }
            elseif (count($noDesbloqueadas)<8) {

                $desbloqueadas = Mujeres::inRandomOrder()
                ->whereIn('Mujeres_Id',function($query) use ($user) {
                   $query->select('Id_Mujeres')->from('mujeresdesbloqueadas')->where('Id_Usuario','=',$user);
                })
                ->limit(8-count($noDesbloqueadas))->get();

                // $desbloqueadas = mujeresdesbloqueadas::select('Id_Mujeres')
                // ->where('Id_Usuario','=', $user)
                // ->limit(8-count($noDesbloqueadas))
                // ->get();
                

                foreach ($desbloqueadas as $mujer)
                $collection->push($mujer);


            }

        return $collection;
    }

    
}
