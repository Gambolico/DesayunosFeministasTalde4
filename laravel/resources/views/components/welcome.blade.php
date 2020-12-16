@extends('layout.parent')

@section('title', 'Welcome')

@section('content')

<!-- Welcome -->
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

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