@extends('adminlte::page')

@section('title', 'Asignaturas')

@section('content_header')

    @can('admin.asignaturas.create')
        <a class="btn btn-primary float-right" href="{{ route('admin.asignaturas.create') }}" role="button">
            Nueva asignatura
        </a>
    @endcan

    <h1>Lista de asignaturas</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif


    @livewire('admin.asignaturas-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop