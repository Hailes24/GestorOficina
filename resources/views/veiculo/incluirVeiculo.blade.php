
@extends('layouts.appSis')
@section('body')

@component('componentes.veiculo')

@endcomponent
            <li class="bg_ls"> <a href="mostrarVeiculos">Ver Todos Veículos</a> </li>  
            <li class="bg_lb"> <a href="#">Alterar dado do Veículo</a> </li>      
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
              <form  method="post" action="/incluirVeiculo" id="form-wizard" class="form-horizontal">
                @csrf
                <div id="form-wizard-1" class="step">
                  <input type="hidden" name="idFuncionario" value="{{Auth::user()->id}}">
                  <div class="control-group">                   
                    <label class="control-label">Placa:</label>
                    <div class="controls">
                      <input id="username" type="text" name="placa" placeholder="Nome da placa" />
                    </div>
                  </div>
                  <div class="control-group">
                    <br><br>
                    <label class="control-label">Modelo:</label>
                    <div class="controls">
                      <input id="username" type="text" name="modelo" placeholder="Nome do modelo" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">MARCA:</label>
                    <div class="controls">
                      <input id="dataNasc" type="text" class="form-control" placeholder="MARCA" name="marca" autocomplete="new-password">
                    </div>
                  </div>  
                  <div class="control-group">
                    <label class="control-label">COMBUSTIVEL:</label>
                    <div class="controls">
                      <input id="dataNasc" type="text" class="form-control" placeholder="Combustivel" name="combustivel" autocomplete="new-password">
                    </div>
                  </div> 
                  <div class="control-group">
                    <label class="control-label">COR:</label>
                    <div class="controls">
                      <input id="dataNasc" type="text" class="form-control" placeholder="COR" name="cor" autocomplete="new-password">
                    </div>
                  </div> 

                  <div class="control-group">
                    <div class="controls">
                        <span class="add-on bg_lg"></span><input id="idcliente" type="text" class="form-control" placeholder="Cliente" name="idcliente" value=""  list="tcliente"  autocomplete="idcliente" autofocus required>
                        <datalist id="tcliente">
                          @foreach($cliente as $cli)
                            <option value="{{$cli->id}}">{{$cli->nome}}</option>
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
