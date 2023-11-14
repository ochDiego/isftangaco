@extends('adminlte::page')

@section('title', 'Carreras')

@section('content_header')

    @can('admin.carreras.create')    
        <a class="btn btn-primary float-right" href="{{ route('admin.carreras.create') }}" role="button">
            Nueva carrera
        </a>
    @endcan

    <h1>Lista de carreras</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif


    @livewire('admin.carreras-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop