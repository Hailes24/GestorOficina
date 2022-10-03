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
            <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
              <h5>Dados da Categoria</h5>
            </div>
            <div class="widget-content nopadding">
              <form  method="post" action="/categoria-listar/{id}" id="form-wizard" class="form-horizontal">
                @csrf
                <div id="form-wizard-1" class="step">
                  <div class="control-group">
                    <br><br>
                    <label class="control-label">Categoria:</label>
                    <div class="controls">
                        <input id="nome" type="text"  placeholder="Nome da Categoria" name="nome" value="{{ old('nome') }}"  list="tnome"  autocomplete="nome" autofocus required>
                        @foreach($categoria as $cat)
                            <datalist id="tnome">
                              <option value="{{$cat->id}}">{{$cat->nome}}</option>                                
                            </datalist>
                        @endforeach
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

