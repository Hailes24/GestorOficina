<div id="search">
  <form action="/pesquisarServico" method="GET" class="mh-form">
  @csrf
    <!--input type="text" name="nome" placeholder="Pesquisar Cliente..."/-->
    <input type="text" name="search" placeholder="pesquisar" />
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
  </form>
</div>

