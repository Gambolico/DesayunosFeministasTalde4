@extends('layout.parent')

@section('title', 'Registro')

<!-- CSS -->
<link href="{{ asset('css/register.css') }}" rel="stylesheet">

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
        <form action="/register" method="POST">
            @csrf
            <!-- Elegir Avatar -->
            

            <input type="text" class="fadeIn second" name="email" placeholder="Correo Electronico">
            <input type="text" class="fadeIn second" name="username" placeholder="Usuario">
            <input type="password" class="fadeIn third" name="password" placeholder="Contraseña">
            <input type="password" class="fadeIn third" name="password_confirmation" placeholder="Repita la contraseña"><br>
            <a>Genero:</a><br>
            <!-- checkbox -->
            <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="genero" id="hombre" required/>
            <label class="form-check-label" for="flexCheckDefault">Hombre</label>
            </div>
            <!-- checkbox -->
            <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="genero" id="mujer"/>
            <label class="form-check-label" for="flexCheckDefault">Mujer</label>
            </div>
            <!-- checkbox -->
            <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="genero" id="otro"/>
            <label class="form-check-label" for="flexCheckDefault">Otro</label>
            </div>
            <input type="submit" class="fadeIn fourth" value="Registrarme">
        </form>

        <!-- Iniciar Sesion -->
        <div id="formFooter">
        <a class="underlineHover" href="{{ url('/login') }}">¿Ya tienes cuenta?</a>
        </div>

    </div>
</div>
@stop