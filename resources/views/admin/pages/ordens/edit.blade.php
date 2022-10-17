@extends('adminlte::page')

@section('title', 'Cadastrar ordem')

@section('content_header')
    <h1>Cadastrar ordem</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alerts.alerts')
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados da ordem</h3>
                </div>
                <form action="{{ route('ordens.update', $ordem->id) }}" method="post">
                    @method('PUT')
                    @include('includes.components.ordens.form')
                </form>

            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
