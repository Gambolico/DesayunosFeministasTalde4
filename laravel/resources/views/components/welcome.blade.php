@extends('layout.parent')

@section('title', 'Welcome')

@section('content')
    <style>
        .boton{
            background-color:#261343;
            color:white;
            padding-top:30px;
            padding-bottom:35px;
            padding-left:70px;
            padding-right:70px;
            font-size:25px;
            border-radius:8px;
        }
    </style>

    <div>
        <a href="{{ url('/inicioJuego') }}" class="btn boton">EMPEZAR</a>
        <a href="" class="btn boton">COMO JUGAR</a>
    </div>
@stop