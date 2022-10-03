@extends('layouts.appSis')
@section('body')
<!--top-Header-menu-->

<!--start-top-serch-->
<!--MOSTRAR TODOS OS CLIENTES-->
@component('componentes.categoria')
@endcomponent
            <li class="bg_ls"> <a href="/produto-reg">Cadastrar Produto</a> </li>  
            <li class="bg_lb"> <a href="#">Alterar ddados do Produto</a> </li>      
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
            <h5>Produtos cadastrados no Sistema:</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nome da peca</th>  
                  <th>Preço da Compra</th> 
                  <th>preço da venda</th> 
                  <th>Lucro</th> 
                  <th>Código de barra</th> 
                  <th>Placa</th> 
                  <th>stokminimo</th> 
                  <th>stok Máximo</th> 
                  <th>estoque</th> 
                  <th>Foto </th> 
                  <th>Marca</th>  
                  <th>Categoria</th>           
                  
                </tr>
              </thead>
              @foreach($produto as $pro)
              <tbody>
                <tr class="odd gradeX">
                    <td>{{$pro->nome}}</td> 
                    <td>{{$pro->precoCompra}}</td>
                    <td>{{$pro->precoVenda}}</td>
                    <td>{{$pro->lucro}}</td>
                    <td>{{$pro->codigoBarra}}</td>
                    <td>{{$pro->placa}}</td>
                    <td>{{$pro->stoqueminimo}}</td>
                    <td>{{$pro->stoquemaximo}}</td>
                    <td>{{$pro->stok}}</td>
                    <td>{{$pro->foto}}</td>
                    <td>{{$pro->marca}}</td>
                    <td>{{$pro->localizacao}}</td>
                    <td>{{$pro->idcategoria}}</td>

                   
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



