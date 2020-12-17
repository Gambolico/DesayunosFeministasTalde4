@extends('layout.parent')

@section('title', 'Inicio juego')

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

    .container{
        margin-top: 60px;
        background-color: white;
        display: flex;
        align-items: center;
        flex-direction: column; 
        justify-content: center;
        height: 70%;
        -webkit-border-radius: 10px 10px 10px 10px;
        border-radius: 10px 10px 10px 10px;
    }

    .ContainerRadio {
        margin-top:25px;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .ContainerRadio input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .ContainerRadio:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .ContainerRadio input:checked ~ .checkmark {
        background-color: #2196F3;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .ContainerRadio input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .ContainerRadio .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }

    input[type=button], input[type=submit], input[type=reset]  {
        background-color: #56baed;
        border: none;
        color: white;
        padding: 15px 80px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        font-size: 13px;
        -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
        box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        margin: 5px 20px 40px 20px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
        background-color: #39ace7;
    }

    input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
        -moz-transform: scale(0.95);
        -webkit-transform: scale(0.95);
        -o-transform: scale(0.95);
        -ms-transform: scale(0.95);
        transform: scale(0.95);
    }
    .backgroundGeneral{
        background-image: url('https://desayunosfeministascantabria.files.wordpress.com/2018/10/cropped-logotipo-2.jpg');
        background-repeat: no-repeat;
        background-size: contain;
        background-size: 100% 100%;
    }

    </style>

<div class="container"> 
    <h1>Elija el Modo de Juego</h1>
        <div class="row text-center">
            <div class="col">
                <label class="ContainerRadio">Encontrar las Parejas
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                </label>
            <div>
            <div class="col">
                <label class="ContainerRadio">Adivinar
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
            <div>
        <div>
        <div class="row text-center">
            <div class="col">
                <a href="{{ route('elegirModoJuego', ['modo'=>'libre']) }}" class="btn boton">JUGAR</a>
            </div>
            <div class="col">
                <a href="{{ url('/') }}" class="btn boton">MUJERES</a>
            </div>
        </div>
    </div>
@stop