@extends('adminlte::page')

@section('title', 'Asistencias')

@section('content_header')
    <h1>Lista de asistencias</h1>
@stop

@section('content')
    @livewire('admin.asistencias-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop