@extends('layouts.auth')
@section('content')
@if(Session::has('error'))
    <div class="span-alert">
        {{ Session::get('error') }}
    </div>
@endif
@if(session('status'))
    <div class="span-success">
        {{ session('status') }}
    </div>
@endif
<div class="caja-login">
    <img src="{{ asset('images/letra2.png') }}">
    <!--h6>{{ __('Inicia sesión con tu cuenta') }}</h6-->
    
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>
            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" maxlength="50" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" maxlength="20" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <!--div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Recuérdame') }}
                    </label>
                </div>
            </div>
        </div-->

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Iniciar sesión') }}
                </button>
            </div>
        </div>
    </form>
</div>
@if (Route::has('password.request'))
<div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
        <p><a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Olvidé mi contraseña.') }}
        </a></p>
    </div>
</div>
@endif
@endsection
