@extends('adminlte::page')

@section('title', 'Lista de categorias')

@section('content_header')
    <h1>Lista de Categorias</h1>
@stop

@section('content')
    <div class="form-group">
        <div class="">
            <div class="">
                <a class="btn btn-success" href="{{ route('categorias.create') }}"> Nova categoria</a>
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
            <th>Data hora</th>
            <th width="280px">Operações</th>
        </tr>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $categoria->nome }}</td>
                <td>{{ $categoria->created_at }}</td>

                <td>
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-primary" href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $categorias->links() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
