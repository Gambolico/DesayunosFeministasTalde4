<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MujeresController;
use App\Http\Controllers\JuegoController;

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

//* Intentar iniciar sesion

Route::post('/login', [LoginController::class, 'tryLogin']);

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

Route::post('/parejas/libre', [JuegoController::class, 'desbloquearMujeres']);

//* Vista adivina (libre)

Route::get('/adivina/{modo}', [JuegoController::class, 'adivina'])->name('empezarAdivina');

//* Vista coleccion

Route::get('/coleccion', [MujeresController::class, 'coleccion']);
Route::get('/coleccion/{id}', [MujeresController::class, 'coleccion'])->name('mujer');
//Vista Carta Biografia
Route::get('/biografia', [MujeresController::class, 'biografia']);