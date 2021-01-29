@extends('layout.parent')

@section('title', 'Recuperar Contraseña')

@section('content')

<!-- CSS -->
<link href="('public/CSS/emailRecuperar.css')" rel="stylesheet">

<div class=" mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5 mt-5">
            <div class="bg-light mt-5">
                <h3 class="card-header d-flex justify-content-center">{{ __('Recuperar Contraseña') }}</h3>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row d-flex justify-content-center">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico') }}</label> -->

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electronico">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="form-group row mb-4 d-flex justify-content-center">
                            <div class="col-md-6 ">
                                <button type="submit" class="btn" style="background-color: #261343;color: white">
                                    {{ __('Enviar Link de recuperacion') }}
                                </button>
                            </div>
                        </div><hr>
                        
                        <div class="d-flex justify-content-center">
                            <a class="underlineHover" href="{{ url('/login') }}">Iniciar Sesion</a> <!-- Espaciado entre las dos --> &nbsp&nbsp&nbsp 
                            <a class="underlineHover" href="{{ url('/register') }}">¿Aun no tienes cuenta?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
