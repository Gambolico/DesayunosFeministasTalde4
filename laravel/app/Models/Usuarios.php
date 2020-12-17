<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
        //La tabla que vamos a usar
        protected $table = 'usuarios';

        protected $fillable = [
                'Usuario',
                'Contraseña',
                'Email'
        ];
        public $timestamps = false;

        public function checkUsername($username)
        {
                
                $usuario = Usuarios::select('Usuario')
                ->where('Usuario','=',$username)
                ->get();
                return $usuario;

        }
}
