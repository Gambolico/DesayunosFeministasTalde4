<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuarios extends Authenticatable
{
        //La tabla que vamos a usar
        protected $table = 'usuarios';

        protected $fillable = [
                'Usuario',
                'Contraseña',
                'Email'
        ];

        protected $hidden = [
                'Contraseña',
                'remember_token',
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
