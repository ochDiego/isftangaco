@extends('adminlte::page')

@section('title', 'Tipos de licencia')

@section('content_header')

    @can('admin.tiposlicencia.create')
        <a class="btn btn-primary float-right" href="{{ route('admin.tiposlicencia.create') }}" role="button">
            Nuevo tipo de licencia
        </a>
    @endcan

    <h1>Lista de tipos de licencia</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    @livewire('admin.tipos-licencia-index',)
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop