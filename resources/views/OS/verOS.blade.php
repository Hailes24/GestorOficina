@extends('layouts.appSis')
@section('body')
<!--top-Header-menu-->

<!--start-top-serch-->
@component('componentes.pesquisa')

@endcomponent

    <h1>Mostrar toda ordem do serviço</h1>
  </div>
  
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Clientes cadastrados no Sistema:</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th>Data de entrada</th>
                  <th>Data de previsão de entrega</th>
                  <th>descricao do cliente</th>
                  <th>Descrição do serviço</th>
                </tr>
              </thead>
              @foreach($cliente as $cli)
              <tbody>
                <tr class="odd gradeX">
                  <td>xxxxxxxxxx</td>
                  <td>YYYYYYYYYYY</td>
                  <td>ZZZZZZZZZZZZZZ</td>
                  <td class="center">GGGGGGGGGGGG</td>
                  <td class="center">TTTTTTTTTTTT</td>
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
</div>
<!--Footer-part-->
<div class="">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
@endsection

