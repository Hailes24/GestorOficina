@extends('adminlte::page')

@section('title', 'Editar Perfil')

@section('content_header')
    <h1>Editar Perfil - {{$funcionario->name}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alerts.alerts')
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados do Perfil</h3>
                </div>
                <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @include('includes.components.funcionarios.form')
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
