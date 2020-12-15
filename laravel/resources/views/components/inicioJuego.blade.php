@extends('layout.parent')

@section('title', 'Inicio juego')

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
        
        .backgroundGeneral{
            background-image: url('https://desayunosfeministascantabria.files.wordpress.com/2018/10/cropped-logotipo-2.jpg');
            background-repeat: no-repeat;
            background-size: contain;
            background-size: 100% 100%;
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
                <a href="{{ url('/') }}" class="btn boton">JUGAR</a>
            </div>
            <div class="col">
                <a href="{{ url('/') }}" class="btn boton">MUJERES</a>
            </div>
        </div>
    </div>
@stop