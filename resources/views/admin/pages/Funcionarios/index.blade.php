@extends('adminlte::page')

@section('title', 'Lista de Funcionario')

@section('content_header')
    <h1>Lista de funcionarios</h1>
@stop

@section('content')
<div class="form-group">
    <div class="">
        <div class="">
            <a class="btn btn-success" href="{{ route('funcionarios.create') }}"> Novo Funcionario</a>
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
        <th>Email</th>
        <th>Telemóvel</th>
        <th>Salario</th>
        <th>Data de Nascimento</th>
        <th width="280px">Operações</th>
    </tr>
    @foreach ($funcionarios as $funcionario)
    <tr>
        <td>{{ ++$i }}</td>
        <td>
            @if ($funcionario->foto)
                <img src="{{ url("storage/users/$funcionario->foto") }}" alt="" style="max-width:100px;">
            @endif
        </td>
        <td>{{ $funcionario->nome }}</td>
        <td>{{ $funcionario->email }}</td>
        <td>{{ $funcionario->telemovel }}</td>
        <td>{{ $funcionario->salario }}</td>
        <td>{{ $funcionario->data_nasc }}</td>


        <td>


            <form action="{{ route('funcionarios.destroy',$funcionario->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <a class="btn btn-primary" href="{{ route('funcionarios.edit', $funcionario->id) }}">Editar</a>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $funcionarios->links() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
