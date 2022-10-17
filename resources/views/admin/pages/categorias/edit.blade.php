@extends('adminlte::page')

@section('title', 'Cadastrar Categoria')

@section('content_header')
    <h1>Cadastrar Categoria - {{$categoria->name}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alerts.alerts')
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados do categoria</h3>
                </div>
                <form action="{{ route('categorias.update', $categoria->id) }}" method="post" >
                    @method('PUT')
                    @include('includes.components.categorias.form')
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
