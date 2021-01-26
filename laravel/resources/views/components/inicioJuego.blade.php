@extends('layout.parent')

@section('title', 'Inicio juego')

@section('content')

<!-- CSS -->
<link href="{{ asset('CSS/inicioJuego.css') }}" rel="stylesheet">

    <div class="container"> 
        <h1>Elija el Modo de Juego</h1><br>
        <div class="col">
            <a href="{{ route('empezarParejas', ['modo'=>$modo])}}" class="btn boton">ENCUENTRA LAS PAREJAS</a>
        </div>
        <div class="col">
            <a href="{{ route('coleccion', ['id'=>auth()->user()->id])}}" class="btn boton">MUJERES</a>
        </div>
    </div>
    
@stop