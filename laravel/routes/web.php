<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MujeresController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BiografiaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('components/welcome');
});

//* Vista login

Route::get('/login', [LoginController::class, 'viewLogin']);

//* Login administrador

Route::get('/areaAdmin', [AdminController::class, 'index'])->name('areaAdmin')->middleware('is_admin');

//* View Añadir Mujeres

Route::get('/areaAdmin/AñadirMujeres', [AdminController::class, 'viewAñadirMujeres'])->name('AñadirMujeres');

    //* Añadir Mujeres

    Route::post('/areaAdmin/AñadirMujer', [AdminController::class, 'AñadirMujer'])->name('AñadirMujer');

//* View Eliminar Mujeres

Route::get('/areaAdmin/EliminarMujeres', [AdminController::class, 'viewEliminarMujeres'])->name('EliminarMujeres');

    //* Eliminar Mujer

    Route::get('/areaAdmin/EliminarMujeres/{id}', [AdminController::class, 'eliminarMujer'])->name('EliminarMujer');

//* View Editar Usuarios

Route::get('/areaAdmin/EditarUsuarios', [AdminController::class, 'viewEditarUsuarios'])->name('EditarUsuarios');

    //* Eliminar Usuario

    Route::get('/areaAdmin/EliminarUsuarios/{id}', [AdminController::class, 'eliminarUsuarios'])->name('EliminarUsuario');

    /* //* Hacer Usuario Admin

    Route::get('/areaAdmin/EditarUsuarios/{id}', [AdminController::class, 'editarUsuarios'])->name('EditarUsuario'); */

    //* Editar Admin

    Route::get('/areaAdmin/EditarUsuarios/{id}', [AdminController::class, 'editarUsuarios'])->name('EditarUsuario');

    //* Editar Usuarios

    Route::post('/areaAdmin/EditarUsuarios/{id}', [AdminController::class, 'editarUsuariosModal'])->name('EditarUsuarioPost');

//* View Agregar Usuarios

Route::get('/areaAdmin/AgregarUsuarios', [AdminController::class, 'viewAgregarUsuarios'])->name('AgregarUsuarios');

    //* Agregar Usuarios

    Route::post('/areaAdmin/AgregarUsuario', [AdminController::class, 'agregarUsuarios'])->name('AgregarUsuario');

//* Intentar iniciar sesion

Route::post('/login', [LoginController::class, 'tryLogin'])->name('login');

//* Intentar iniciar sesion

Route::get('/logout', [LoginController::class, 'Logout']);

//* Vista register

Route::get('/register', [LoginController::class, 'viewRegister']);

//* Metodo post del registro

Route::post('/register', [LoginController::class, 'createAccount']);

//* Recuperar Contraseña

Route::get('/recuperar', [LoginController::class, 'recuperarContraseña']);

//* Vista Como jugar

Route::get('/comoJugar', [JuegoController::class, 'comoJugar']);

//* Vista inicio juego (cambiar modo)

Route::get('/inicioJuego/{modo}', [JuegoController::class, 'inicioJuego'])->name('elegirModoJuego');

//* Vista elegir juego

Route::get('/elegirJuego', [JuegoController::class, 'elegirJuego']);

//* Vista elegir modo

Route::get('/elegirModo', [JuegoController::class, 'elegirModo']);

//* Vista parejas (libre)

Route::get('/parejas/{modo}', [JuegoController::class, 'parejas'])->name('empezarParejas');

Route::post('/parejas/desbloquear', [JuegoController::class, 'saveMujer']);

//* Vista coleccion

Route::get('/coleccion-{id?}', [MujeresController::class, 'coleccion'])->name('coleccion');

Route::post('/coleccionFiltrar', [MujeresController::class, 'filtrarMujeres'])->name('coleccionFiltrar');

Route::get('/coleccion/biografia/{id}', [BiografiaController::class, 'datosBiografia'])->name('biografia');

Route::get('/forgot-password', [LoginController::class, 'forgotPassword'])->middleware('guest')->name('password.request');

Route::post('/forgot-password', [LoginController::class, 'validateResetPassword'])->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', [LoginController::class, 'resetPassword'])->middleware('guest')->name('password.reset');

Route::post('/reset-password', [LoginController::class, 'resetPasswordEmail'])->middleware('guest')->name('password.update');