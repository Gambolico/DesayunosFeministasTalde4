@extends('layout.parent')

@section('title', 'Welcome')

<!-- CSS -->
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

@section('content')

    <div class="container">
        <div class="row text-center">
            <div class="col">
                <a href="{{ url('/elegirModo') }}" class="btn boton">EMPEZAR</a>
            </div>
            <div class="col">
                <a href="{{ url('/comoJugar') }}" class="btn boton">COMO JUGAR</a>
            </div>
        </div>
    </div>
@stop