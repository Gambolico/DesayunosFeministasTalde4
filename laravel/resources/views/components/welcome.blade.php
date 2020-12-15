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
            width:500px;
        }

        .container{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80%;
        }

        .backgroundGeneral{
            background-image: url('https://desayunosfeministascantabria.files.wordpress.com/2018/10/cropped-logotipo-2.jpg');
            background-repeat: no-repeat;
            background-size: contain;
            background-size: 100% 100%;
        }

    </style>
    
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