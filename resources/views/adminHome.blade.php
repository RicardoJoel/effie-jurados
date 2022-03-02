@extends('layouts.app')
@section('content')
<div class="container">
    <div class="fila">
        <div class="space"></div>
        <div class="columna columna-1">
            <h4 class="title1">{{ __('Bienvenido, ') }} {{ Auth::user()->nombre.' '.Auth::user()->apellido }}</h4>
        </div>
    </div>
    <div class="fila">
        <div class="space"></div>
        <div class="columna columna-1">
            <div class="title2">
                <h6>{{ __('Seguimiento a usuarios registrados') }}</h6>
            </div>
        </div>
    </div>
    <div class="fila">
        <div class="columna columna-3">
            <p><i class="fas fa-sort datos" style="padding-left:5px"></i> <b>{{ __('Edición:') }}</b>
            @inject('ediciones','App\Services\Ediciones')
            <select name="slt-anho" id="slt-anho">
                @foreach ($ediciones->get() as $index => $edicion)
                <option value="{{$edicion}}" {{$edicion == date('Y') ? 'selected' : ''}}>{{$edicion}}</option>
                @endforeach
            </select></p>
        </div>
        <div class="columna columna-3"></div>
        <div class="columna columna-3"></div>
    </div>
    <div class="fila">
        <div class="columna columna-1">
            <table id="tbl-users" class="tablealumno">
                <thead>
                    <th width="90">{{ __('N°') }}</th>
                    <th width="300">{{ __('Nombre completo') }}</th>
                    <th width="300">{{ __('Correo electrónico') }}</th>
                    <th width="170">{{ __('Inscripción') }}</th>
                    <th width="170">{{ __('Nivel logrado') }}</th>
                    <th>{{ __('Detalle') }}</th>
                </thead>
            </table>
        </div>
    </div>
    <div class="fila">
        <div class="space"></div>
        <div id="div-spanuser" class="columna columna-1 span-fail">
            <center><p><b>¡Atención!</b> <span id="msj-rqstuser"></span></p></center>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/effie-dashboard.js') }}"></script>
@endsection