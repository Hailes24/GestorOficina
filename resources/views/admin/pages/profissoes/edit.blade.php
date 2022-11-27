@extends('adminlte::page')

@section('title', 'Editar perfil')

@section('content_header')
    <h1>Cadastrar perfil - {{$user->nome}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alerts.alerts')
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados do perfils</h3>
                </div>
                <form action="{{ route('perfils.update', $user->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @include('includes.components.perfils.form')
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
