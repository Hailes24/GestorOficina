<div id="search">
  <form action="/pesquisarcliente" method="GET" class="mh-form">
  @csrf
    <!--input type="text" name="nome" placeholder="Pesquisar Cliente..."/-->
    <input type="text" name="search" placeholder="pesquisar" />
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
  </form>
</div>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/home" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Página inicial</a> <!--a href="#" class="current">Tables</a--> </div>
    <!--h1>Clientes</h1-->
    <div class="container-fluid">
      <div class="quick-actions_homepage">
        <ul class="quick-actions">
          <li class="bg_ls"> <a href="/mostrarCliente">Ver Todos Clientes</a> </li> 
          <li class="bg_lb"> <a href="#">Alterar dado do cliente</a> </li>
        
        </ul>
      </div>
    </div>
  </div>