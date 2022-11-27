@extends('adminlte::page')

@section('title', 'Lista de vendas')

@section('content_header')
    <h1>Lista de Veículo</h1>
@stop

@section('content')
    <div class="form-group">
        <div class="">
            <div class="">
                <a class="btn btn-success" href="{{ route('produtos.create') }}"> Nova fatura</a>
            </div>

        </div>
    </div>
    <div class="">

    </div>

    @include('includes.alerts.interative')
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Cliente</th>
            <th>Nº Fatura</th>
            <th>Endereço</th>
            <th>Data hora</th>
            <th width="280px">Operações</th>
        </tr>
        @foreach ($vendas as $venda)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $venda->nome }}</td>
                <td>{{'00'.$venda->num_fatura.'/'.date("Y") }}</td>
                <td>{{ $venda->endereco }}</td>
                <td>{{ $venda->created_at }}</td>
                <td>

                        <a class="btn btn-primary" href="{{route('fatura.pdf', $venda->id)}}">Imprimir</a>

                </td>
            </tr>
        @endforeach
    </table>

    {!! $vendas->links() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
