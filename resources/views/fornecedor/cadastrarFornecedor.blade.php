@extends('layouts.appSis')
@section('body')
  @component('componentes.fornecedor')
  @endcomponent

 

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Página inicial</a> <!--a href="#" class="current">Tables</a--> </div>
    <!--h1>Clientes</h1-->
    <div class="container-fluid">
      <div class="quick-actions_homepage">
        <ul class="quick-actions">
          <li class="bg_ls"> <a href="/verFornecedores">Ver Todos Fornecedores</a> </li> 
          <li class="bg_lb"> <a href="#">Alterar dado do Fornecedor</a> </li>
        
        </ul>
      </div>
    </div>
  </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><a href="#"> <i class="icon-pencil"></i></a> </span>
              <h5>Dados do Fornecedor</h5>
            </div>
            <div class="widget-content nopadding">
              <form  method="post" action="cadastrarFornecedor" id="form-wizard" class="form-horizontal">
                @csrf
                <div id="form-wizard-1" class="step">
                  <input type="hidden" name="idFuncionario" value="{{Auth::user()->id}}">
                    <div class="control-group">
                        <br><br>
                        <label class="control-label">Nome do Fornecedor:</label>
                        <div class="controls">
                        <input id="username" type="text" name="name" placeholder="Nome Completo" autofocus required/>
                        </div>
                    </div> 
                    <div class="control-group">
                        <br><br>
                        <label class="control-label">E-mail:</label>
                        <div class="controls">
                        <input  type="email"  placeholder="Digite o seu email" name="email"  autocomplete="name" autofocus required/>
                        </div>
                    </div> 
                    <div class="control-group">
                        <br><br>
                        <label class="control-label">Telefone:</label>
                        <div class="controls">
                        <input name='telefone' type="text"  placeholder="Número do telefone"  autocomplete="telefone" autofocus required/>
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
    <!--Footer-part-->
    
<!--end-Footer-part-->
@endsection
