@extends('layout.parent')

@section('title', 'Registro')

<!-- CSS -->
<link href="{{ asset('CSS/register.css') }}" rel="stylesheet">

@section('content')


<div class="wrapper fadeInDown">
    <div id="formContent">
        <h3>CREAR CUENTA</h3>
        <hr>

        {{-- Esta parte saca los errores creados en la validacion del fomulario de registro --}}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Login Form -->
        <form action="/register/login" method="POST">
            @csrf
            <input type="text" class="fadeIn second" name="email" placeholder="Correo Electronico">
            <input type="text" class="fadeIn second @error('usuario') is-invalid @enderror" name="username" placeholder="Usuario">
            <input type="password" class="fadeIn third" name="password" placeholder="Contraseña">
            <input type="password" class="fadeIn third" name="password_confirmation" placeholder="Repita la contraseña">
            <input type="submit" class="fadeIn fourth" value="Registrarme">
        </form>

        <!-- Iniciar Sesion -->
        <div id="formFooter">
        <a class="underlineHover" href="{{ url('/login') }}">¿Ya tienes cuenta?</a>
        </div>

    </div>
</div>
@stop