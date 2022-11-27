@extends('adminlte::page')

@section('title', 'Cadastrar Profissão')

@section('content_header')
    <h1>Cadastrar Profissão</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alerts.alerts')
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados da Profissão</h3>
                </div>
                <form action="{{ route('profissoes.store') }}" method="post" enctype="multipart/form-data">
                    @include('includes.components.profissoes.form')
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
