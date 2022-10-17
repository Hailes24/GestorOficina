@extends('adminlte::page')

@section('title', 'Lista de Clientes')

@section('content_header')
    <h1>Lista de Clientes</h1>
@stop

@section('content')
<div class="form-group">
    <div class="">
        <div class="">
            <a class="btn btn-success" href="{{ route('clientes.create') }}"> Novo Cliente</a>
        </div>

    </div>
</div>
<div class="">

</div>

@include('includes.alerts.interative')
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telemóvel</th>
        <th>Data hora</th>
        <th width="280px">Operações</th>
    </tr>
    @foreach ($clientes as $cliente)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $cliente->nome }}</td>
        <td>{{ $cliente->email }}</td>
        <td>{{ $cliente->telemovel }}</td>
        <td>{{ $cliente->created_at }}</td>


        <td>


            <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <a class="btn btn-primary" href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $clientes->links() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
