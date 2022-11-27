@extends('adminlte::page')

@section('title', 'Criar Factura')

@section('content_header')
    <h1>Emitir Nova Factura</h1>
@stop

@section('content')

        <div class="row">
            <div class="col-md-4"</div>
                <form action="{{route('faturas.store')}}" method="post" id="add-linha">
                    @include('includes.components.faturas._form')

                </form>
            </div>
            <div class="col-md-8">
                <div class="card card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Linhas da Factura</h3></div>
                        <div class="card-body">

                            @include('includes.components.faturas.modal')
                            @include('includes.components.faturas.tabela')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">

        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    @stop

    @section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
            $('#qtd').val(data.qtd);
        <script>
            @include('includes.components.faturas.utilitario')
        </script>
    @stop
