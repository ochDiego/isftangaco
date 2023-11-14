@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')

    <a class="btn btn-primary float-right" href="{{ route('admin.roles.create') }}" role="button">
        Nuevo rol
    </a>

    <h1>Editar rol</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($role,['route' => ['admin.roles.update',$role],'autocomplete' => 'off','method' => 'put']) !!}

                @include('admin.roles.partials.form')

                {!! Form::submit('Actualizar rol', ['class' => 'btn btn-primary']) !!}

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