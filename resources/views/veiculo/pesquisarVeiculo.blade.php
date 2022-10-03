
@extends('layouts.appSis')
@section('body')
<!--top-Header-menu-->
<!--start-top-serch-->
@component('componentes.veiculo')

@endcomponent
          <li class="bg_ls"> <a href="/mostrarVeiculos">Ver Todos Veículos</a> </li> 
          <li class="bg_lb"> <a href="#">Alterar dado do Veículo</a> </li>
          <li class="bg_lg"> <a href="veiculo"> Cadastrar Veículo</a> </li>   
        </ul>
      </div>
    </div>
  </div>

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
                  <th>PLACA</th>
                  <th>MODELO</th>
                  <th>MARCA</th>
                  <th>COMBUSTIVEL</th>
                  <th>COR</th>
                </tr>
              </thead>
              @foreach($search as $vei)
              <tbody>
                <tr class="odd gradeX">
                  <td>{{$vei->placa}}</td>
                  <td>{{$vei->modelo}}</td>
                  <td>{{$vei->marca}}</td>
                  <td class="center"> {{$vei->combustivel}}</td>
                  <td class="center">{{$vei->cor}}</td>
                  <td class="center"><a class="btn btn-danger btn-mini"  href="/veiculo-listar/{{$vei->id}}">Eliminar</a> 
                  <a class="btn btn-success btn-mini" >Editar</a></td>   
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


