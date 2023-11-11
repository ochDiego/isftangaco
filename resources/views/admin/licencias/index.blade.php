@extends('adminlte::page')

@section('title', 'Licencias')

@section('content_header')

    <a class="btn btn-primary float-right" href="{{ route('admin.licencias.create') }}" role="button">
        Nueva licencia
    </a>

    <h1>Lista de licencias</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    @livewire('admin.licencias-index')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop