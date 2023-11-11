@extends('adminlte::page')

@section('title', 'Tipos de licencia')

@section('content_header')
    <h1>Registrar nuevo tipo de licencia</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.tiposlicencia.store','autocomplete' => 'off']) !!}

            @include('admin.tiposlicencia.partials.form')

            {!! Form::submit('Registrar tipo de licencia', ['class' => 'btn btn-primary']) !!}

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