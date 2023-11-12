@extends('adminlte::page')

@section('title', 'Profesores')

@section('content_header')

    <a class="btn btn-primary float-right" href="{{ route('admin.profesores.create') }}" role="button">
        Nuevo profesor
    </a>

    <h1>Lista de profesores</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    @livewire('admin.profesores-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop