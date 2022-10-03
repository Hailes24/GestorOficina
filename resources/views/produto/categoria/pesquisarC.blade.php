
@extends('layouts.appSis')
@section('body')
<!--top-Header-menu-->
<!--start-top-serch-->
@component('componentes.categoria')
@endcomponent
          <li class="bg_ls"> <a href="/categoria-listar">Ver Todas Categorias</a> </li> 
          <li class="bg_lb"> <a href="#">Alterar dado da Categoria</a> </li>
          <li class="bg_lg"> <a href="categoria"> Cadastrar Categoria</a> </li>   
        </ul>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><a href="#"> <i class="icon-pencil"></i></a></span>
            <h5>Dados da pesquisa:</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nome Da Categoria</th>                                
                </tr>
              </thead>
              @foreach($search as $sea)
              <tbody>
                <tr class="odd gradeX">
                  <td>{{$sea->nome}}</td> 
                  <td class="center"><a class="btn btn-danger btn-mini"  href="/categoria-listar/{{$sea->id}}">Eliminar</a> 
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
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <!--Footer-part-->
@endsection

































