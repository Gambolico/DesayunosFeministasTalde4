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

//* Vista register

Route::get('/register', [LoginController::class, 'viewRegister']);

//* Metodo post del registro

Route::post('/register/login', [LoginController::class, 'createAccount']);

//* Vista Como jugar

Route::get('/comoJugar', [JuegoController::class, 'comoJugar']);

//* Vista inicio juego

Route::get('/juego', [JuegoController::class, 'inicioJuego']);

//* Vista inicio juego (cambiar modo)

Route::get('/juego/{modo}', [JuegoController::class, 'inicioJuego'])->name('elegirModoJuego');

//* Vista elegir modo

Route::get('/elegirModo', [JuegoController::class, 'elegirModo']);

//* Vista parejas

Route::get('/parejas', [JuegoController::class, 'parejas']);

//* Vista adivina

Route::get('/adivina', [JuegoController::class, 'adivina']);

//* Vista coleccion

Route::get('/coleccion', [MujeresController::class, 'coleccion']);
