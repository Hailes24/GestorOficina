@extends('adminlte::page')

@section('title', 'Cadastrar Servico')

@section('content_header')
    <h1>Cadastrar Serviço</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alerts.alerts')
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados do serviço</h3>
                </div>
                <form action="{{ route('servicos.store') }}" method="post">
                    @include('includes.components.servicos.form')
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
