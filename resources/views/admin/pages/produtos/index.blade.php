@extends('adminlte::page')

@section('title', 'Lista de Produtos')

@section('content_header')
    <h1>Lista de Veículo</h1>
@stop

@section('content')
    <div class="form-group">
        <div class="">
            <div class="">
                <a class="btn btn-success" href="{{ route('produtos.create') }}"> Novo Produto</a>
            </div>

        </div>
    </div>
    <div class="">

    </div>

    @include('includes.alerts.interative')
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Fabricante</th>
            <th>Categoria</th>
            <th>Localização</th>
            <th>Preço</th>
            <th>Data hora</th>
            <th width="280px">Operações</th>
        </tr>
        @foreach ($produtos as $produto)
            <tr>
                <td>{{ ++$i }}</td>
                <td>
                    @if ($produto->foto)
                        <img src="{{ url("storage/produtos/$produto->foto") }}" alt="" style="max-width:100px;">
                    @endif
                </td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->fabricante }}</td>
                <td>{{ $produto->categorias->nome }}</td>
                <td>{{ $produto->localizacao }}</td>
                <td>{{ $produto->preco_venda }}</td>
                <td>{{ $produto->created_at }}</td>
                <td>

                    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-primary" href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $produtos->links() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
