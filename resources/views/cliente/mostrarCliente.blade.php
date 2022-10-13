@extends('layouts.appSis')
@section('body')
<!--top-Header-menu-->

<!--start-top-serch-->
    @component('componentes.cliente')

    @endcomponent

    <!--h1>Clientes</h1-->
          <li class="bg_ls"> <a href="/Cliente">Cadastrar Cliente</a> </li> 
          <li class="bg_lb"> <a href="#">Alterar dado do cliente</a> </li>
        
        </ul>
      </div>
    </div>
  </div>

  
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <a href="#"> <i class="icon-pencil"></i></a></span>
            <h5>Clientes cadastrados no Sistema:</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nome completo</th>
                  <th>Número do telefone</th>
                  <th>E-mail</th>
                  <th>Data</th>
                </tr>
              </thead>
              @foreach($cliente as $cli)
              <tbody>
                <tr class="odd gradeX">
                  <td>{{$cli->nome}}</td>
                  <td>{{$cli->telefone}}</td>
                  <td>{{$cli->email}}</td>
                  <td class="center">{{$cli->dataHora}}</td> 
                  <td class="center"><a class="btn btn-danger btn-mini" href="/cliente-listar/{{$cli->id}}">Eliminar</a> 
                  
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

</div>
<!--Footer-part-->
<
@endsection

