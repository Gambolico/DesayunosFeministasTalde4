<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
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
