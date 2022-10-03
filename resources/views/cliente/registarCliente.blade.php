
@extends('layouts.appSis')
  @section('body')
    @component('componentes.cliente')

    @endcomponent  
    <!--h1>Clientes</h1-->
   
          <li class="bg_ls"> <a href="/mostrarCliente">Ver Todos Clientes</a> </li> 
          <li class="bg_lb"> <a href="#">Alterar dado do cliente</a> </li>
        
        </ul>
      </div>
    </div>
  </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><a href="#"> <i class="icon-pencil"></i></a></span>
              <h5>Dados do cliente</h5>
            </div>
            <div class="widget-content nopadding">
              <form  method="post" action="/cadastrarCliente" id="form-wizard" class="form-horizontal">
                @csrf
                <div id="form-wizard-1" class="step">
                  <input type="hidden" name="idFuncionario" value="{{Auth::user()->id}}">
                  <div class="control-group">
                    <br><br>
                    <label class="control-label">Nome do Cliente:</label>
                    <div class="controls">
                      <input id="username" type="text" name="nome" placeholder="Nome Completo" class="form-control {{$errors->has('nome') ? 'is-invalid' :''}}" />
                     
                      @error('nome')
                        <span  class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label"> Número do telefone</label>
                    <div class="controls">
                      <input  type="text" class="form-control" placeholder="Numero do telefone" name="telefone" autocomplete="new-password">
                      @error('telefone')
                        <span  class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div> 
                  <div class="control-group">
                    <label class="control-label">E-mail</label>
                    <div class="controls">
                      <input  type="email" class="form-control" placeholder="E-mail" name="email" autocomplete="new-password">
                      @error('email')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>                 
                </div>              
                <br><br>              
                <div class="form-actions">
                <br><br>
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
              <br><br><br>
            </div>
          </div>
        </div>
      </div>
    </div>  
    
@endsection






















