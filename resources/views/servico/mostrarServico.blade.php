@extends('layouts.appSis')
@section('body')
<!--top-Header-menu-->

<!--start-top-serch-->
<!--MOSTRAR TODOS OS CLIENTES-->
@component('componentes.servico')

@endcomponent

<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="/home" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Página Inicial</a> <!--a href="#">Form elements</a> <a href="#" class="current">Form wizard</a--> </div> 
      
      <div class="container-fluid">
        <div class="quick-actions_homepage">
          <ul class="quick-actions">    
            <li class="bg_ls"> <a href="servico">Cadastrar Serviço</a> </li>  
            <li class="bg_lb"> <a href="#">Alterar dado do Serviço</a> </li>      
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
            <h5>Veículo cadastrados no Sistema:</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Servico</th>
                  <th>Preço</th>                 
                  
                </tr>
              </thead>
              @foreach($servico as $ser)
              <tbody>
                <tr class="odd gradeX">
                  <td>{{$ser->nome}} k</td>
                  <td>{{$ser->preco}} Kz</td>
                                   
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
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<!--Footer-part-->
<div class="">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
@endsection



