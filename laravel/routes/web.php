<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MujeresController;

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

Route::get('/login', 'LoginController@Index');

//* Vista register

Route::get('/register', [LoginController::class, 'register']);

//* Vista inicio juego

Route::get('/inicioJuego', [MujeresController::class, 'inicioJuego']);

//* Vista elegir juego

Route::get('/elegirJuego', [MujeresController::class, 'elegirJuego']);

//* Vista elegir modo

Route::get('/elegirModo', [MujeresController::class, 'elegirModo']);

//* Vista parejas

Route::get('/parejas', [MujeresController::class, 'parejas']);

//* Vista adivina

Route::get('/adivina', [MujeresController::class, 'adivina']);

//* Vista coleccion

Route::get('/coleccion', [MujeresController::class, 'coleccion']);
