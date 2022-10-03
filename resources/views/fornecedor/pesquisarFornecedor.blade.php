
@extends('layouts.appSis')
@section('body')
<!--top-Header-menu-->
<!--start-top-serch-->
@component('componentes.fornecedor')
@endcomponent
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/home" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Página inicial</a> <!--a href="#" class="current">Tables</a--> </div>
    <!--h1>Clientes</h1-->
    <div class="container-fluid">
      <div class="quick-actions_homepage">
        <ul class="quick-actions">
          <li class="bg_ls"> <a href="/fornecedor">Adicionar Novo Fornecedor</a> </li> 
          <li class="bg_lb"> <a href="#">Alterar Dado do Fornecedor</a> </li>
        
        </ul>
      </div>
    </div>
  </div>

   <!--**************************MOSTRAR DADOS DA PESQUISA***********************-->
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <a href="#"> <i class="icon-pencil"></i></a> </span>
            <h5>Dados da pesquisa:</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nome completo</th>
                  <th>Número do telefone</th>
                  <th>E-mail</th>
                 
                </tr>
              </thead>
              @foreach($search as $forn)
              <tbody>
                <tr class="odd gradeX">
                  <td>{{$forn->name}}</td>
                  <td>{{$forn->telefone}}</td>
                  <td>{{$forn->email}}</td>
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















