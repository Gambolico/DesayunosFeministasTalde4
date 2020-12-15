@extends('layout.parent')

@section('title', 'Elegir modo')

@section('content')

<style>
        .boton{
            background-color: #261343;
            border: none;
            color: white;
            padding: 15px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            font-size: 25px;
            box-shadow: 0 10px 30px 0 rgb(178, 138, 218);
            border-radius: 5px 5px 5px 5px;
            margin: 5px 20px 40px 20px;
            width: 500px;
        }
        .boton:hover{
            background-color: #5c2ba6;
            color: white;
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
                <a href="{{ url('/') }}" class="btn boton">MODO LIBRE</a>
            </div>
            <div class="col">
                <a href="{{ url('/') }}" class="btn boton">MODO HISTORIA</a>
            </div>
        </div>
    </div>
@stop