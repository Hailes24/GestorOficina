
@extends('layouts.appSis')
@section('body')
<!--top-Header-menu-->
<!--start-top-serch-->
@component('componentes.servico')

@endcomponent

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/home" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Página inicial</a> <!--a href="#" class="current">Tables</a--> </div>
    <!--h1>Clientes</h1-->
    <div class="container-fluid">
      <div class="quick-actions_homepage">
        <ul class="quick-actions">
          <li class="bg_ls"> <a href="/verServicos">Ver Todos Veículos</a> </li> 
          <li class="bg_lb"> <a href="#">Alterar dado do Veículo</a> </li>
          <li class="bg_lg"> <a href="servico"> Cadastrar Veículo</a> </li>   
        </ul>
      </div>
    </div>
  </div>

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
                  <th>Data</th>
                </tr>
              </thead>
              @foreach($search as $sea)
              <tbody>
                <tr class="odd gradeX">
                  <td>{{$sea->nome}}</td>
                  
                  <td class="center">{{$sea->preco}}</td>
                </tr> 
              </tbody>
              @endforeach
            </table>
          </div>
        </div>            
      </div>
    </div>
  </div>
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <!--Footer-part-->
<div class="">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
@endsection

































