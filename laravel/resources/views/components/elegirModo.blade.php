@extends('layout.parent')

@section('title', 'Elegir modo')

<!-- CSS -->
<link href="{{ asset('css/elegirModo.css') }}" rel="stylesheet">

@section('content')

<div class="container">
        <div class="row text-center">
            <div class="col">
                <a href="{{ route('elegirModoJuego', ['modo'=>'libre']) }}" class="btn boton">MODO LIBRE</a>
            </div>
            <div class="col">
                <a href="{{ route('elegirModoJuego', ['modo'=>'historia']) }}" class="btn boton">MODO HISTORIA</a>
            </div>
        </div>
    </div>
@stop