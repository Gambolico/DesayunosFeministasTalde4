<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
        //La tabla que vamos a usar
        protected $table = 'usuarios';

        protected $fillable = [
                'Usuario',
                'Contraseña'
        ];
        public $timestamps = false;
}
