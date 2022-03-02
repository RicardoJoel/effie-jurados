@extends('layouts.app')
@section('content')
@inject('notas','App\Services\Notas')
<div class="container">
    <div class="fila">
        <div class="space"></div>
        <div class="columna columna-1">
            <h4 class="title1">{{ __('Detalle de usuario') }}</h4>
        </div>
    </div>
    <div class="fila">
        <div class="space"></div>
        <div class="columna columna-1">
            <h5 class="title3">{{ __('Datos generales') }}</h5>
        </div>
    </div>
    <div class="fila datos">
        <div class="columna columna-4">
            <p><i class="fas fa-user"></i> <b>{{ __('Nombre:') }}</b> {{ $user->nombre . ' ' . $user->apellido }}</p>
        </div>
        <div class="columna columna-4">
            <p><i class="fas fa-birthday-cake"></i> <b>{{ __('Edad:') }}</b> {{ $user->edad . ' años' }}</p>
        </div>
        <div class="columna columna-4">
            <p><i class="fas fa-envelope"></i> <b>{{ __('Correo:') }}</b> <a href="mailto: {{ $user->email }}"> {{ $user->email }}</a></p>
        </div>
        <div class="columna columna-4">
            <p><i class="fas fa-phone-alt"></i> <b>{{ __('Teléfono:') }}</b> {{ $user->telefono }}</p>
        </div>
    </div>
    <div class="fila">
        <div class="space"></div>
        <div class="columna columna-1">
            <h5 class="title3">{{ __('Datos laborales') }}</h5>
        </div>
    </div>
    <div class="fila datos">
        <div class="columna columna-4">
            <p><i class="fas fa-suitcase"></i> <b>{{ __('Empresa:') }}</b> {{ $user->empresa}}</p>
        </div>
        <div class="columna columna-4">
            <p><i class="fas fa-industry"></i> <b>{{ __('Tipo de empresa:') }}</b> {{ $user->tipoempresa }}</a></p>
        </div>
        <div class="columna columna-4">
            <p><i class="fas fa-address-card"></i> <b>{{ __('Cargo:') }}</b> {{ $user->cargo }}</p>
        </div>
        <div class="columna columna-4">
            <p><i class="fas fa-graduation-cap"></i> <b>{{ __('Experiencia:') }}</b> {{ $user->anosexperiencia . ' años'}}</p>
        </div>
    </div>
    <div class="fila">
        <div class="space"></div>
        <div class="columna columna-1">
            <h5 class="title3">{{ __('Datos complementarios') }}</h5>
        </div>
    </div>
    <div class="fila datos">
        <div class="columna columna-4">
            <p><i class="fa fa-check-circle"></i> <b>{{ __('Nivel logrado:') }}</b> {{ $notas->max($user->idusuario) }}</a></p>
        </div>
        <div class="columna columna-4">
            <p><i class="fas fa-gavel"></i> <b>{{ __('Ha sido jurado:') }}</b> {{ ucwords($user->jurado) }}</a></p>
        </div>
        <div class="columna columna-4">
            <p><i class="far fa-calendar"></i> <b>{{ __('Inscripción:') }}</b> {{ date('d/m/Y', strtotime($user->created_at)) }}</p>
        </div>
        <div class="columna columna-4">
            <p><i class="far fa-check-square"></i> <b>{{ __('Estado:') }}</b> {{ $user->delete_at === NULL ? 'Activo' : 'No activo'}}</p>
        </div>
    </div>
    <div class="fila">
        <div class="space"></div>
        <div class="columna columna-1">
            <h5 class="title3">{{ __('Detalle de evaluaciones') }}</h5>
        </div>
    </div>
    <div class="fila datos">
        <div class="columna columna-1">
            <table class="tablealumno">
                <thead>
                    <th width="90">{{ __('N°') }}</th>
                    <th width="300">{{ __('Unidad didáctica') }}</th>
                    <th width="300">{{ __('Estado de evaluación') }}</th>
                    <th width="170">{{ __('Número de intentos') }}</th>
                    <th width="170">{{ __('Fecha de evaluación') }}</th>
                </thead>
                <tbody>
                    @if (count($notas->get($user->idusuario)))
                        @foreach ($notas->get($user->idusuario) as $nota)
                        <tr>
                            <td><center>{{ $nota['index'] }}</center></td>
                            <td><center><i class="fa fa-folder-open"></i> {{ $nota['unidad'] }}</center></td>
                            <td><center>{{ $nota['estado'] }}</center></td>
                            <td><center><i class="fa fa-hashtag"></i> {{ $nota['intentos'] }}</center></td>
                            <td><center>{{ $nota['fecha'] }}</center></td>
                        </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="8">No hay registros.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="fila">
        <div class="space"></div>
        <div class="columna columna-1">
            <center>
            <a href="{{ url('/admin/home') }}" class="btn-effie">{{ __('Volver al panel inicial') }}</a>
            </center>
        </div>
    </div>
</div>
@endsection
