@extends('layout.parent')

@section('title', 'Login')

@section('content')

<!-- CSS -->
<link href="{{ asset('css/login.css') }}" rel="stylesheet">

<div class="wrapper fadeInDown">
    <div id="formContent">
        <h3>INICIAR SESION</h3>
        <hr>

        <!-- Login Form -->
        <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
        <input type="password" id="password" class="fadeIn third" name="login" placeholder="Contraseña">
        <input type="submit" class="fadeIn fourth" value="Iniciar Sesion">
        </form>

        <!-- Crear Cuenta -->
        <div id="formFooter">
        <a class="underlineHover" href="{{ url('/register') }}">¿Aun no tienes cuenta?</a>
        </div>

    </div>
</div>
@stop