@extends('layouts.appSis')
  @section('body')
    @component('componentes.veiculo')
    @endcomponent   
          <li class="bg_ls"> <a href="veiculo">Cadastrar Veículo</a> </li>  
          <li class="bg_lb"> <a href="#">Alterar dado do Veículo</a> </li>      
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
            <h5>Veículo cadastrados no Sistema:</h5>
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
                  <th>XXXXX</th>
                  <th>XXXXXX</th>
                </tr>
              </thead>
              @foreach($veiculo as $vei)
              <tbody>
                <tr class="odd gradeX">
                  <td>{{$vei->placa}}</td>
                  <td>{{$vei->modelo}}</td>
                    <td>{{$vei->marca}}</td>
                  <td> {{$vei->combustivel}}</td>
                  <td class="center">{{$vei->cor}}</td>
                  <td class="center"> XXXXXXXXXXX</td>
                  <td class="center">XXXXXXXXXX</td>
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
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<!--Footer-part-->
@endsection



