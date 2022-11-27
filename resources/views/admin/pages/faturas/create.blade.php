@extends('adminlte::page')

@section('title', 'Criar Factura')

@section('content_header')
    <h1>Emitir Nova Factura</h1>
@stop

@section('content')


    <div class="row">
        <div class="col-md-12">
            @include('includes.alerts.alerts')
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados da fatura</h3>
                </div>
                <form class="form" name="formfatura">
                    @include('includes.components.faturas._form')

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
       @include('includes.components.faturas.utilitario')
    </script>
@stop
