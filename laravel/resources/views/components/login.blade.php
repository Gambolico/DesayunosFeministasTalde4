@extends('layout.parent')

@section('title', 'Login')

<!-- CSS -->
<link href="{{ asset('css/login.css') }}" rel="stylesheet">

@section('content')

<div class="wrapper fadeInDown">
    <div id="formContent">
        <h3>Desayunos Feministas</h3>

        <!-- Login Form -->
        <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
        <input type="password" id="password" class="fadeIn third" name="login" placeholder="Contraseña">
        <input type="submit" class="fadeIn fourth" value="Iniciar Sesion">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
        <a class="underlineHover" href="#">¿Aun no tienes cuenta?</a>
        </div>

    </div>
</div>
@stop