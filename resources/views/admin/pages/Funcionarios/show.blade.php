@extends('adminlte::page')

@section('title', 'Perfil')

@section('content_header')
    <h1>Perfil</h1>
@stop

@section('content')
    <form action="{{ route('perfils.store') }}" method="post">
        @include('includes.components.perfils.show')
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
