@extends('adminlte::page')

@section('title', 'Cadastrar Produto')

@section('content_header')
    <h1>Cadastrar produto - {{$produto->placa}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alerts.alerts')
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados do produtos</h3>
                </div>
                <form action="{{ route('produtos.update', $produto->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @include('includes.components.produtos.form')
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
