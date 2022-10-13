@extends('layouts.appSis')
@section('body')
<!--top-Header-menu-->

<!--start-top-serch-->
<!--MOSTRAR TODOS OS CLIENTES-->
@component('componentes.categoria')
@endcomponent
            <li class="bg_ls"> <a href="categoria">Cadastrar Categoria</a> </li>  
            <li class="bg_lb"> <a href="#">Alterar dado da Categoria</a> </li>      
          </ul>
        </div>
      </div>
    </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <a href=""> <i class="icon-pencil"></i></a> </span>
            <h5>Categorias cadastradas no Sistema:</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>CATEGORIA</th>              
                  
                </tr>
              </thead>
              @foreach($categoria as $cat)
              <tbody>
                <tr class="odd gradeX">
                  <td>{{$cat->nome}} k</td> 
                  <td class="center"><a class="btn btn-danger btn-mini"  href="/categoria-listar/{{$cat->id}}">Eliminar</a> 
                  <a class="btn btn-success btn-mini" href="/produto-listar/4">Editar</a></td>                                  
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



