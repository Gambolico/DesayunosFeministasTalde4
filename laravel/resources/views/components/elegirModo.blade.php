@extends('layout.parent')

@section('title', 'Elegir modo')

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
        .backgroundWellcome{
            background-image: url("https://desayunosfeministascantabria.files.wordpress.com/2018/10/cropped-logotipo-2.jpg")
        }

        .container{
            display: flex;
            align-items: center;
            flex-direction: column; 
            justify-content: center;
            height: 80%;
        }

    </style>

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