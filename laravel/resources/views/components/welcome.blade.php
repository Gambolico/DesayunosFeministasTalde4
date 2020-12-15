@extends('layout.parent')

@section('title', 'Welcome')

@section('content')
    <style>
        .boton {
            background-color:#261343;
            color:white;
        }
    </style>

    <div>
        <button type="button" class="btn boton">EMPEZAR</button>
        <button type="button"  class="btn boton">MUJERES</button>
        <button type="button"  class="btn boton">COMO JUGAR</button>
    </div>
@stop