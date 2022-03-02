@extends('layouts.app')
@section('content')
<div class="container">
    <div class="fila">
        <div class="space"></div>
        <div class="columna columna-1">
            <h4 class="title1">{{ __('Bienvenido, ') }} {{ Auth::user()->nombre.' '.Auth::user()->apellido }}</h4>
        </div>
    </div>
</div>
@endsection
