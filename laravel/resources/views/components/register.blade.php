@extends('layout.parent')

@section('title', 'Login')


<!-- CSS -->
<link href="{{ asset('css/register.css') }}" rel="stylesheet">

@section('content')


<div class="wrapper fadeInDown">
    <div id="formContent">
        <h3>CREAR CUENTA</h3>
        <hr>

        <!-- Login Form -->
        <form action="/register/login" method="POST">
            @csrf
            <input type="text" id="username" class="fadeIn second @error('usuario') is-invalid @enderror" name="username" placeholder="Correo Electronico">
            <input type="text" id="username" class="fadeIn second @error('usuario') is-invalid @enderror" name="username" placeholder="Usuario">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Repita la contraseña">
            <input type="submit" class="fadeIn fourth" value="Registrarme">
        </form>

        <!-- Iniciar Sesion -->
        <div id="formFooter">
        <a class="underlineHover" href="{{ url('/login') }}">¿Ya tienes cuenta?</a>
        </div>

    </div>
</div>
@stop