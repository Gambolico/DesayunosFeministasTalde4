<?php

use Illuminate\Support\Facades\Route;

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

//* Vista padre

Route::get('/parent', function () {
    return view('parent');
});

//* Vista login

Route::get('/login', function () {
    return view('login');
});

//* Vista register

Route::get('/register', function () {
    return view('register');
});

//* Vista inicio juego

Route::get('/iniciojuego', function () {
    return view('inicioJuego');
});

//* Vista elegir juego

Route::get('/elegirjuego', function () {
    return view('elegirJuego');
});

//* Vista elegir modo

Route::get('/elegirmodo', function () {
    return view('elegirModo');
});

//* Vista parejas

Route::get('/pareja', function () {
    return view('pareja');
});

//* Vista adivina

Route::get('/adivina', function () {
    return view('adivina');
});

//* Vista coleccion

Route::get('/coleccion', function () {
    return view('coleccion');
});
