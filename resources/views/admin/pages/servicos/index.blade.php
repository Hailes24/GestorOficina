@extends('adminlte::page')

@section('title', 'Lista de servicos')

@section('content_header')
    <h1>Lista de servicos</h1>
@stop

@section('content')
<div class="form-group">
    <div class="">
        <div class="">
            <a class="btn btn-success" href="{{ route('servicos.create') }}"> Novo serviço</a>
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
        <th>Preco</th>
        <th>Data hora</th>
        <th width="280px">Operações</th>
    </tr>
    @foreach ($servicos as $servico)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $servico->nome }}</td>
        <td>{{ $servico->preco }}</td>
        <td>{{ $servico->created_at }}</td>
        <td>


            <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <a class="btn btn-primary" href="{{ route('servicos.edit', $servico->id) }}">Editar</a>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $servicos->links() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
