@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Registrar nuevo rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store','autocomplete' => 'off']) !!}

                @include('admin.roles.partials.form')

                {!! Form::submit('Registrar rol', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop