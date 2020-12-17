@extends('layout.parent')

@section('title', 'Welcome')

@section('content')

<!-- CSS -->
<link href="{{ asset('CSS/welcome.css') }}" rel="stylesheet">

    <div class="container">
        <div class="row text-center">
            <div class="row">
                <a href="{{ url('/elegirModo') }}" class="btn boton">EMPEZAR</a>
            </div>
            <div class="row">
                <a href="{{ url('/comoJugar') }}" class="btn boton">COMO JUGAR</a>
            </div>
        </div>
    </div>
@stop