@extends('adminlte::page')

@section('title', 'Nova Fatura')

@section('content_header')
    <h1>Emitir nova fatura</h1>

@stop

@section('content')


    <div class="row">
        <div class="col-md-12">
            @include('includes.alerts.alerts')
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados do cliente</h3>
                </div>
                <form action="{{ route('vendas.store') }}" method="post">
                            @include('includes.components.faturas.formdados')
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

        @include('includes.components.faturas.utilitariodados')
    </script>
@stop
