
@extends('layouts.appSis')
@section('body')
@component('componentes.veiculo')
@endcomponent
            <li class="bg_ls"> <a href="Ver_ordemdeServico">Ver OS</a> </li>  
            <li class="bg_lb"> <a href="cadastrarOS">Cadastrar OS</a> </li>      
          </ul>
        </div>
      </div>
    </div>

      <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
              <h5>Dados do Veículo</h5>
            </div>
            <div class="widget-content nopadding">
              <form  method="post" action="/cadastrarOS" id="form-wizard" class="form-horizontal">
                @csrf
                <div id="form-wizard-1" class="step">
                  <input type="hidden" name="idFuncionario" value="{{Auth::user()->id}}">                 
                  <div class="control-group">
                    <br><br>
                    <label class="control-label">descricção Doserviço:</label>
                    <div class="controls">
                      <input id="descricaoDoservico" type="text" name="descricaoDoservico" placeholder="Descricao Doserviço" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Descrição Cliente:</label>
                    <div class="controls">
                      <input id="DescricaoCliente" type="text" class="form-control" placeholder="Descrição Cliente" name="DescricaoCliente" autocomplete="new-password">
                    </div>
                  </div>  
                  <div class="control-group">
                    <label class="control-label">Data Entrega:</label>
                    <div class="controls">
                      <input id="dadaEntrega"type="text" class="form-control" placeholder="Data da Entrega" name="dadaEntrega" autocomplete="new-password">
                    </div>
                  </div> 
                  
                  <div class="control-group">
                  <label class="control-label">Veículo:</label>
                    <div class="controls">
                        <span class="add-on bg_lg"></span><input id="idVeiculo" type="text" class="form-control" placeholder="idVeiculo" name="idVeiculo" value=""  list="tVeiculo"  autocomplete="idVeiculo" autofocus required>
                        <datalist id="tVeiculo">
                          @foreach($veiculo as $vei)
                            <option value="{{$vei->id}}">{{$vei->marca}}</option>
                            @endforeach
                        </datalist>
                    </div>
                  </div>   
    

                  <div class="control-group">
                  <label class="control-label">Produto:</label>
                    <div class="controls">
                        <span class="add-on bg_lg"></span><input id="idproduto" type="text" class="form-control" placeholder="Produto" name="idproduto" value=""  list="tproduto"  autocomplete="idproduto" autofocus required>
                        <datalist id="tproduto">
                          @foreach($produto as $pro)
                            <option value="{{$pro->id}}">{{$pro->nome}}</option>
                            @endforeach
                        </datalist>
                    </div>
                  </div>
           
                <br><br>              
                <div class="form-actions">              
                  <!--input id="back" class="btn btn-primary" type="reset" value="Back" /-->
                  <a class="btn btn-primary" href="{{ url('/home') }}">Voltar</a>
                  <button type="submit" class="btn btn-primary">
                      {{ __('Cadastrar') }}
                  </button>

                  <!--input id="next" class="btn btn-primary" type="submit" value="Next" /-->
                  <div id="status"></div>
                </div>
                <div id="submitted"></div>
                
              </form>             
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection
