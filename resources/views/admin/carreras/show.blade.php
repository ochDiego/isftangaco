@extends('adminlte::page')

@section('title', 'Carreras')

@section('content_header')

    <a class="btn btn-primary float-right" href="{{ route('admin.carreras.edit',$carrera) }}" role="button">
        Editar
    </a>

    <h1>Asignaturas de la carrera</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p class="h3">Carrera:</p>
            <p class="form-control">{{ $carrera->nombre }}</p>

            <p class="h3">Asignaturas:</p>

            <ul>
                @foreach ($carrera->asignaturas as $asignatura)
                    <li>
                        {{ $asignatura->nombre }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop