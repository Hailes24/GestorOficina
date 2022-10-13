@extends('layouts.appSis')
  @section('body')
    @component('componentes.servico')
    @endcomponent  

    <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="/home" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Página Inicial</a> <!--a href="#">Form elements</a> <a href="#" class="current">Form wizard</a--> </div> 
      
      <div class="container-fluid">
        <div class="quick-actions_homepage">
          <ul class="quick-actions">    
            <li class="bg_ls"> <a href="verServicos">Ver Todos Serviço</a> </li>  
            <li class="bg_lb"> <a href="#">Alterar dado do Serviço</a> </li>      
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
              <h5>Dados do Serviço</h5>
            </div>
            <div class="widget-content nopadding">
              <form  method="post" action="/incluirServico" id="form-wizard" class="form-horizontal">
                @csrf
                <div id="form-wizard-1" class="step">
                  <input type="hidden" name="idFuncionario" value="{{Auth::user()->id}}">
                  <div class="control-group">
                    <br><br>
                    <label class="control-label">Serviço:</label>
                    <div class="controls">
                      <input id="tipo" type="text" name="nome" placeholder="Tipo do Serviço" class="form-control {{$errors->has('nome') ? 'is-invalid' :''}}" />
                      @error('nome')
                        <span  class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="controls">
                      <input id="preco" type="text" name="preco" placeholder="Preço do Serviço" class="form-control {{$errors->has('nome') ? 'is-invalid' :''}}" />
                      @error('nome')
                        <span  class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
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
    <br><br><br><br><br><br><br><br><br><br><br><br>    
@endsection






















