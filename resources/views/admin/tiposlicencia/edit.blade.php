@extends('adminlte::page')

@section('title', 'Tipos de licencia')

@section('content_header')
    <h1>Editar tipo de licencia</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($tipolicencia,['route' => ['admin.tiposlicencia.update',$tipolicencia],'autocomplete' => 'off','method' => 'put']) !!}

            @include('admin.tiposlicencia.partials.form')

            {!! Form::submit('Actualizar tipo de licencia', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready( function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
        });
        });

    </script>
@stop