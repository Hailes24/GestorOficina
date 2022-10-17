@extends('adminlte::page')

@section('title', 'Lista de ordems')

@section('content_header')
    <h1>Lista de ordem de serviço</h1>
@stop

@section('content')
<div class="form-group">
    <div class="">
        <div class="">
            <a class="btn btn-success" href="{{ route('ordens.create') }}"> Nova ordem de serviço</a>
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
        <th>Placa</th>
        <th>Produto</th>
        <th>Data de Entrada</th>
        <th>Data de Revisao</th>
        <th>Data de Entrega</th>
        <th width="280px">Operações</th>
    </tr>
    @foreach ($ordens as $ordem)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $ordem->cliente->nome }}</td>
        <td>{{ $ordem->veiculo->placa }}</td>
        <td>{{ $ordem->produto->nome }}</td>
        <td>{{ $ordem->created_at }}</td>
        <td>{{ $ordem->data_revisao }}</td>
        <td>{{ $ordem->data_entrega }}</td>
        <td>


            <form action="{{ route('ordens.destroy', $ordem->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <a class="btn btn-primary" href="{{ route('ordens.edit', $ordem->id) }}">Editar</a>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $ordens->links() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
