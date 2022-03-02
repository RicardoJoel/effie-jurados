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
    <h6>{{ __('Restablecimiento de contraseña') }}</h6>
    
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>
            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" minlength="6" maxlength="50" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Recibir enlace') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
