<?php

namespace App;

use App\DB;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getUsuariosInf() {
            $users = Usuarios::select('id', 'name','email','is_admin','created_at')
            ->orderByRaw('id', 'asc')
            ->get();
            return $users;
    }

    public static function getUsuariosInfByID($id) {
        $users = Usuarios::select('id', 'name','email','is_admin','created_at')
        ->where('id', '=', $id)
        ->get();
        return $users;
}

    public static function eliminarUsuarioPorID($id) {
        User::select('*')->where('id', '=', $id)->delete(); 
    }

    /* public static function hacerUsuarioAdmin($id) {

        $user = Usuarios::select('is_admin')
        ->where('id','=', $id)->get();

        if ($user[0]->is_admin==0) {
            Usuarios::select('*')->where('id', '=', $id)->update(['is_admin' => 1]);
        } elseif ($user[0]->is_admin==1) {
            Usuarios::select('*')->where('id', '=', $id)->update(['is_admin' => 0]);

        }
    } */
}
