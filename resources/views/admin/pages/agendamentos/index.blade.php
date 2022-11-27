@extends('adminlte::page')

@section('title', 'Lista de Agendamento')

@section('content_header')
    <h1>Lista de Agendamento</h1>
@stop

@section('content')
<div class="form-group">
    <div class="">
        <div class="">
            <a class="btn btn-success" href="{{ route('agendamentos.create') }}"> Novo Agendamento</a>
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
        <th>Cliente</th>
        <th>Data agendada</th>
        <th>Data de criação</th>
        <th width="280px">Operações</th>
    </tr>
    @foreach ($agendamentos as $agendamento)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $agendamento->placa }}</td>
        <td>{{ $agendamento->name }}</td>
        <td>{{ $agendamento->data_hora }}</td>
        <td>{{ $agendamento->created_at }}</td>
        <td>
            <form action="{{ route('agendamentos.destroy',$agendamento->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <a class="btn btn-primary" href="{{ route('agendamentos.edit', $agendamento->id) }}">Editar</a>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $agendamentos->links() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
