@extends('adminlte::page')

@section('title', 'Profesores')

@section('content_header')

    <a class="btn btn-primary float-right" href="{{ route('admin.profesores.create') }}" role="button">
        Nuevo profesor
    </a>

    <h1>Editar profesor</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($profesore,['route' => ['admin.profesores.update',$profesore],'autocomplete' => 'off','files' => true,'method' => 'put']) !!}

            @include('admin.profesores.partials.form')

            {!! Form::submit('Actualizar profesor', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .wrapper-image {
            position: relative;
            padding-bottom: 56.26%;
        }

        .wrapper-image img {
            position: absolute;
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
    </style>
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

        //Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }

    </script>
@stop