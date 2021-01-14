<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuarios extends Authenticatable
{
        //La tabla que vamos a usar
        protected $table = 'users';

        public static function getUsuariosInf() {
                $users = Usuarios::select('id', 'name','email','is_admin','created_at')
                ->orderByRaw('id', 'asc')
                ->get();
                return $users;
        }

}
