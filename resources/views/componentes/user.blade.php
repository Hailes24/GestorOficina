@extends('layouts.appSis')

@section('Search')
  <div id="search">
    <form action="/pesquisar_funcionario" method="GET" class="mh-form">
    @csrf
      <!--input type="text" name="nome" placeholder="Pesquisar Cliente..."/-->
      <input type="text" name="search" placeholder="pesquisar" />
      <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
    </form>
  </div>
  @endsection

@section('body')

<!--sidebar-menu-->
  <!--main-container-part-->
  <div id="content">
  <!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>Página inicial</a></div>
  Logado Como usuario
  </div>

<!--Action boxes DESENHPS QUADRADO COM DESENHO DE ARCO IRES-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="/Cliente">Clientes</a> </li>
        <li class="bg_lg span3"> <a href="ordemdeServico">  Ordem De Serviço</a> </li>
        <li class="bg_ly"> <a href="/veiculo">Veículos </a></li>
        <li class="bg_lo"> <a href="#">Imprimir</a> </li>
        <!--li class="bg_ls"> <a href="/fornecedor">Fornecedores</a> </li-->
        <li class="bg_lo span3"> <a href="#">Fatura</a> </li>
        <li class="bg_ls"> <a href="produto-reg">Produtos</a> </li>
        <li class="bg_lb"> <a href="/servico">Serviços</a> </li>
        <li class="bg_lg"> <a href="#"> Venda</a> </li>
        <li class="bg_lr"> <a href="#">Compra</a> </li>
      </ul>
    </div>
    <!--End-Action boxes-->  
    <!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Site Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span9">
              <div class="chart"></div>
            </div>
            <!--div class="span3"-->              
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection
