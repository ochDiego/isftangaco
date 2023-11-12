@extends('adminlte::page')

@section('title', 'Profesores')

@section('content_header')
    <h1>Registrar nuevo profesor</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.profesores.store','autocomplete' => 'off','files' => true]) !!}

            @include('admin.profesores.partials.form')

            {!! Form::submit('Registrar profesor', ['class' => 'btn btn-primary']) !!}

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