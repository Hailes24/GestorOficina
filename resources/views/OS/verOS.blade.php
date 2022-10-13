@extends('layouts.appSis')
@section('body')

@component('componentes.os')

@endcomponent
          <li class="bg_ls"> <a href="mostrarVeiculos">Ver OS</a> </li>  
            <li class="bg_lb"> <a href="cadastrarOS">Cadastrar OS</a> </li>      
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
              @foreach($ordemdeservico as $OS)
              <tbody>
                <tr class="odd gradeX">    
                  <td>{{$OS->dataHora}}</td>
                  <td>{{$OS->dadaEntrega}}</td>
                  <td>{{$OS->descricaoDoservico}}</td>
                  <td class="center">{{$OS->descricaoDoservico}}</td>
                  <td class="center">tttttttt</td>
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
   <br/> <br/> <br/> <br/> <br/> <br/><br/> <br/> <br/> <br/> <br/> <br/><br/> <br/> <br/> <br/> <br/> <br/><br/> <br/> <br/> <br/> <br/> <br/>
</div>
@endsection

