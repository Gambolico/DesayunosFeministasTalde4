@extends('layout.parent')

@section('title', 'Login')

@section('content')

<!-- CSS -->
<link href="{{ asset('CSS/login.css') }}" rel="stylesheet">


<div class="wrapper fadeInDown">
@if (session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@endif
    <div id="formContent">
        <h3>INICIAR SESION</h3>
        <hr>

        <!-- Login Form -->
        <form action="/login" method="POST">
        @csrf
        <input type="text" id="login" class="fadeIn second" name="name" placeholder="Usuario">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
        <input type="submit" class="fadeIn fourth" value="Iniciar Sesion">
        </form>

        <!-- Crear Cuenta -->
        <div id="formFooter">
        <a class="underlineHover" href="{{ url('/register') }}">¿Aun no tienes cuenta?</a> <!-- Espaciado entre las dos --> &nbsp&nbsp&nbsp 
        <a class="underlineHover" href="{{ url('/forgot-password') }}">Recuperar contraseña</a>
        </div>

    </div>
</div>
@stop