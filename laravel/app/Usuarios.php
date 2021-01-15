<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //La tabla que vamos a usar
    protected $table = 'users';


    public static function eliminarUsuarioPorID($id) {
        DB::table('users')->where('id', '=', $id)->delete(); 
    }

}
