@extends('layout.parent')

@section('title', 'Como jugar')

@section('content')

<!-- CSS -->
<link href="{{ asset('CSS/comoJugar.css') }}" rel="stylesheet">

<div class="slideshow-container">
    <div>
        <h1>COMO JUGAR</h1><br><br>
    </div>
    <div class="container2">
        <img src="../images/modalidad.png" class="image" style="width:100%">
        <div class="middle">
            <div class="text">
                Elige el modo de juego que quieras!
            </div>
        </div>
    </div>
    
</div>
@stop