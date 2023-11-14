@extends('adminlte::page')

@section('title', 'Profesores')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="wrapper-image">
                        <img src="{{ asset('storage/' . $profesore->image->url) }}" alt="">
                    </div>
                </div>
                <div class="col">
                    <p class="h5">Nombre:</p>
                    <p class="form-control">{{ $profesore->nombre }}</p>

                    <p class="h5">DNI:</p>
                    <p class="form-control">{{ $profesore->dni }}</p>

                    <p class="h5">Email:</p>
                    <p class="form-control">{{ $profesore->email }}</p>

                    <p class="h5">Teléfono:</p>
                    <p class="form-control">{{ $profesore->telefono }}</p>
                </div>
            </div>

            <p class="h5">Fecha de nacimiento:</p>
            <p class="form-control">{{ $profesore->fecha_nac }}</p>

            <p class="h5">Domicilio:</p>
            <p class="form-control">{{ $profesore->domicilio }}</p>

            <p class="h5">CV:</p>
            <a href="{{ asset('storage/' . $profesore->cv) }}" target="_BLANK">
                {{ $profesore->cv }}
            </a>

            <p class="h5 mt-3">Asignaturas a cargo:</p>

            <ul>
                @foreach ($profesore->asignaturas as $asignatura)
                    <li>
                        {{ $asignatura->nombre }}
                    </li>
                @endforeach
            </ul>
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
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop