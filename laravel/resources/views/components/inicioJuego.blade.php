@extends('layout.parent')

@section('title', 'Inicio juego')

<!-- CSS -->
<link href="{{ asset('css/inicioJuego.css') }}" rel="stylesheet">

@section('content')

<div class="container"> 
    <h1>Elija el Modo de Juego</h1>
        <div class="row text-center">
            <div class="col">
                <label class="ContainerRadio">Encontrar las Parejas
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                </label>
            <div>
            <div class="col">
                <label class="ContainerRadio">Adivinar
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
            <div>
        <div>
        <div class="row text-center">
            <div class="col">
                <a href="{{ url('/') }}" class="btn boton">JUGAR</a>
            </div>
            <div class="col">
                <a href="{{ url('/') }}" class="btn boton">MUJERES</a>
            </div>
        </div>
    </div>
@stop