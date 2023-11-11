@extends('adminlte::page')

@section('title', 'Carreras')

@section('content_header')
    <h1>Registrar nueva carrera</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.carreras.store','autocomplete' => 'off']) !!}

            @include('admin.carreras.partials.form')

            {!! Form::submit('Registrar carrera', ['class' => 'btn btn-primary']) !!}

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