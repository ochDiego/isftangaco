@extends('adminlte::page')

@section('title', 'Empresa')

@section('content_header')
    <h1>Editar institución</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong> {{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($empresa, ['route' => ['admin.empresas.update',$empresa],'autocomplete' => 'off','method' => 'put']) !!}

                @include('admin.empresas.partials.form')

                {!! Form::submit('Actulizar', ['class' => 'btn btn-primary']) !!}

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