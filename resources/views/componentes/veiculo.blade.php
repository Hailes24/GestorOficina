<div id="search">
  <form action="/pesquisarVeiculo" method="GET" class="mh-form">
  @csrf
    <!--input type="text" name="nome" placeholder="Pesquisar Cliente..."/-->
    <input type="text" name="search" placeholder="PLACA" />
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
  </form>
</div>
 
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Página inicial</a> <!--a href="#" class="current">Tables</a--> </div>
    <div class="container-fluid">
      <div class="quick-actions_homepage">
        <ul class="quick-actions"> 


