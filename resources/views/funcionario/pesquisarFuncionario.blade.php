
@extends('layouts.appSis')
@section('body')
<!--top-Header-menu-->
<!--start-top-serch-->
@component('componentes.funcionario')

@endcomponent
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Dados da pesquisa:</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nome completo</th>
                  <th>Número do telefone</th>
                  <th>E-mail</th>
                  <th>Data de Nascimento</th>
                  <th>Salario</th>
                  <th>Profissão</th>
                  <th>Data</th>
                </tr>
              </thead>
              @foreach($search as $fun)
              <tbody>
                <tr class="odd gradeX">
                  <td>{{$fun->name}}</td>
                  <td>{{$fun->telefone}}</td>
                    <td>{{$fun->email}}</td>
                  <td>{{$fun->dataNasc}}</td>
                  <td class="center"> {{$fun->salario}}</td>
                  <td class="center"> {{$fun->profissao}}</td>
                  <td class="center">{{$fun->dataHora}}</td>
                </tr> 
              </tbody>
              @endforeach
            </table>
          </div>
        </div>            
      </div>
    </div>
  </div>
   <a href="#">Ver mais</a>
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!--Footer-part-->
@endsection


