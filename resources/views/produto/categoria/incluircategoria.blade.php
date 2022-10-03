@extends('layouts.appSis')
  @section('body')
    @component('componentes.categoria')
    @endcomponent     
            <li class="bg_ls"> <a href="/categoria-listar">Ver Categorias</a> </li>  
            <li class="bg_lb"> <a href="#">Alterar Categoria</a> </li>      
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><a href="#"> <i class="icon-pencil"></i></a> </span>
              <h5>Dados da Categoria</h5>
            </div>
            <div class="widget-content nopadding">
              <form  method="post" action="categoria-reg" id="form-wizard" class="form-horizontal">
                @csrf
                <div id="form-wizard-1" class="step">
                  <div class="control-group">
                    <br><br>
                    <label class="control-label">Categoria:</label>
                    <div class="controls">
                      <input id="tipo" type="text" name="nome" placeholder="Tipo do Serviço" class="form-control {{$errors->has('nome') ? 'is-invalid' :''}}" />
                      @error('nome')
                        <span  class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
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

