@extends('adminlte::page')

@section('title', 'Lista de Veiculos')

@section('content_header')
    <h1>Lista de Veículo</h1>
@stop

@section('content')
<div class="form-group">
    <div class="">
        <div class="">
            <a class="btn btn-success" href="{{ route('veiculos.create') }}"> Novo Veículo</a>
        </div>

    </div>
</div>
<div class="">

</div>

@include('includes.alerts.interative')
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Placa</th>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Combustivel</th>
        <th>Cor</th>
        <th>Data hora</th>
        <th width="280px">Operações</th>
    </tr>
    @foreach ($veiculos as $veiculo)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $veiculo->placa }}</td>
        <td>{{ $veiculo->modelo }}</td>
        <td>{{ $veiculo->marca }}</td>
        <td>{{ $veiculo->combustivel }}</td>
        <td>{{ $veiculo->cor }}</td>
        <td>{{ $veiculo->created_at }}</td>
        <td>


            <form action="{{ route('veiculos.destroy', $veiculo->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <a class="btn btn-primary" href="{{ route('veiculos.edit', $veiculo->id) }}">Editar</a>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $veiculos->links() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
