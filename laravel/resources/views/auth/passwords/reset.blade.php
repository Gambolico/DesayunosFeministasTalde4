@extends('layout.parent')

@section('title', 'Recuperar Contraseña')

@section('content')

<div class=" mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5 mt-5">
        <div class="bg-light mt-5">
                <h3 class="card-header d-flex justify-content-center">{{ __('Recuperar Contraseña') }}</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group d-flex justify-content-center">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electronico"><br>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-center">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                name="password" required autocomplete="new-password" placeholder="Nueva Contrasena"><br>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-center">
                                <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" 
                                required autocomplete="new-password" placeholder="Confirmar Contraseña"><br>
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-center">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary" style="background-color: #261343;color: white">
                                    {{ __('Restablecer Contrasena') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
