@extends('layout.parent')

@section('title', 'Login')

@section('content')

<!-- CSS -->
<link href="{{ asset('CSS/login.css') }}" rel="stylesheet">

<div class="wrapper fadeInDown">
    <div id="formContent">
        <h3>RECUPERAR CONTRASEÑA</h3>
        <hr>

        <!-- Login Form -->
        <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="Correo Electronico">
        <input type="submit" class="fadeIn fourth" value="Iniciar Sesion">
        </form>

        <!-- Crear Cuenta -->
        <div id="formFooter">
        <a class="underlineHover" href="{{ url('/login') }}">¿Ya tienes cuenta?</a><!-- Espaciado entre las dos --> &nbsp&nbsp&nbsp 
        <a class="underlineHover" href="{{ url('/register') }}">¿Aun no tienes cuenta?</a> 

        </div>

    </div>
</div>
@stop