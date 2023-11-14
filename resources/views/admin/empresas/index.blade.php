@extends('adminlte::page')

@section('title', 'Institución')

@section('content_header')

    <a class="btn btn-primary float-right" href="{{ route('admin.empresas.edit',$empresa) }}" role="button">
        Editar
    </a>

    <h1>Institución</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p class="h4">Nombre:</p>
            <p class="form-control">{{ $empresa->nombre }}</p>

            <p class="h4">Teléfono:</p>
            <p class="form-control">{{ $empresa->telefono }}</p>

            <p class="h4">Dirección:</p>
            <p class="form-control">{{ $empresa->ubicacion }}</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop