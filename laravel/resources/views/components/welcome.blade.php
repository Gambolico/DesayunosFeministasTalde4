@extends('layout.parent')

@section('title', 'Welcome')

@section('content')
    <style>
        .boton{
            background-color:#261343;
            color:white;
            
        }
    </style>

    <div>
        <a href="{{ url('/inicioJuego') }}" class="btn boton">EMPEZAR</a>
        <button type="button"  class="btn boton">MUJERES</button>
        <button type="button"  class="btn boton">COMO JUGAR</button>
    </div>
@stop