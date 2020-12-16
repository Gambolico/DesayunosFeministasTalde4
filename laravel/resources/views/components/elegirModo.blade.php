@extends('layout.parent')

@section('title', 'Elegir modo')

@section('content')

<!-- CSS -->
<link href="{{ asset('css/elegirModo.css') }}" rel="stylesheet">

    <div class="container">
        <div class="row text-center">
            <div class="row">
                <a href="{{ route('elegirModoJuego', ['modo'=>'libre']) }}" class="btn boton">MODO LIBRE</a>
            </div>
            <div class="row">
                <a href="{{ route('elegirModoJuego', ['modo'=>'historia']) }}" class="btn boton">MODO HISTORIA</a>
            </div>
        </div>
    </div>
@stop