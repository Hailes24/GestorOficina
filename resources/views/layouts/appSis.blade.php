<!DOCTYPE html>
    <html lang="en">
        <head>  
            <title>Sistema De Gestão de Oficina e peça</title>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="stylesheet" href="css/bootstrap.min.css" />
            <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
            <link rel="stylesheet" href="css/fullcalendar.css" />
            <link rel="stylesheet" href="css/matrix-style.css" />
            <link rel="stylesheet" href="css/matrix-media.css" />
            <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
            <link rel="stylesheet" href="css/jquery.gritter.css" />
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'> 
        </head>
    <body>

        <!--Header-part-->
        <div id="header">
            <br>
            <h4><a> {{ Auth::user()->name }}</a></h4>
        </div>
        <!--close-Header-part--> 

        <!--top-Header-menu-->
        <div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav">                
                <li class="nav-item dropdown"><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Sair da aplicação') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>         
                </li>
                
            </ul>           
        </div>
        <!--close-top-Header-menu-->
        <!--start-top- PESQUISAR -->
        @hasSection('Search')
            @yield('Search')
        @endif
        
        <!--close-top-serch-->
        <!--sidebar-menu MENU QUUE FICA AO LADO DAS FUNCIONALIDADES-->
        <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> oficina Auto nelo</a>
            <ul>
                <li class="active"><a href="#"><i class="icon icon-home"></i> <span>Oficina Auto Nelo</span></a> </li>
                <li class="submenu"> <a href=""><i class="icon icon-signal"></i> <span>Cliente</span></a>
                    <ul>
                        <li><a class="sAdd" title="" href="/Cliente"><i class="icon-plus"></i>Cadastrar Cliente</a></li>
                        <li><a href="/mostrarCliente">Ver todos clientes</a></li>
                        <li><a href="#">Alterar dado do cliente</a></li>
                    </ul>
                </li>
                <!--li class="submenu"> <a href="#"><i class="icon icon-inbox"></i> <span>Fornecedores</span></a>
                    <ul>
                        <li><a href="/fornecedor"><i class="icon-plus"></i>Cadastrar Fornecedor</a></li>
                        <li><a href="#">Ver o fornecedor de um serto produto</a></li>
                        <li><a href="/verFornecedores">Ver todos Fornecedores</a></li>
                    </ul>
                </li-->
                <li class="submenu"><a href="#"><i class="icon icon-th"></i> <span>Veiculo</span></a>
                    <ul>
                        <li><a href="veiculo"><i class="icon-plus"></i>Cadastrar Veiculo</a></li>
                        <li><a href="mostrarVeiculos">Ver Todos Veículos</a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#"><i class="icon icon-tint"></i> <span>Produto</span></a>
                    <ul>
                        <li><a href="produto-reg"><i class="icon-plus"></i>Cadastrar Produto</a></li>
                        <li><a href="/Produto-listar">Ver todos os Produto</a></li>
                        <li><a href="#">Consultar Produto</a></li>  
                        <li><a href="#">Alterar Produto</a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Ordem de Serviço</span></a>
                    <ul>
                        <li><a href="/ordemdeServico"><i class="icon-plus"></i>inserir OS</a></li>
                        <li><a href="#">Ver OS</a></li>
                        <li><a href="#">Alterar OS</a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Serviços</span></a>
                    <ul>
                        <li><a href="/servico"><i class="icon-plus"></i>Incluir Serviço</a></li>
                        <li><a href="#">Editar Serviço</a></li>
                        <li><a href="verServicos">Ver Todos Serviços</a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#"><i class="icon icon-tint"></i> <span>Funcionários</span></a>
                    <ul>
                        <li><a href="#"><i class="icon-plus"></i>Cadastrar Funcionário</a></li>
                        <li><a href="funcionarios">Ver todos os Funcionário</a></li>
                        <li><a href="">Consultar Funcionário</a></li>            
                    </ul>
                </li>
                <li class="submenu"><a href="#"><i class="icon icon-pencil"></i> <span>Fatura</span></a>
                    <ul>
                        <li><a href="#"><i class="icon-plus"></i>Cadastrar Fatura</a></li>
                        <li><a href="#">Ver todas as Faturas</a></li>
                        
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Vendas</span></a>
                    <ul>
                        <li><a href="#"><i class="icon-plus"></i>Cadastrar Venda</a></li>
                        <li class="submenu"> <a href="#"> Ver Todas as Vendas</a></li>
                        <ul>
                             <li><a href="#"><i class="icon-plus"></i>Diáris</a></li>
                            <li><a href="#">Semanal</a></li>
                            <li><a href="#">anual</a></li>
                        </ul>
                        <li><a href="#">Consultar venda</a></li>
                          
                    </ul>
                
                <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Compra</span></span></a>
                    <ul>
                        <li><a href="#"><i class="icon-plus"></i>Cadastrar Compra</a></li>
                        <li><a href="#">Ver todas as Compra</a></li>
                        <li><a href="#">Consultar Compra</a></li>
                    </ul>
                </li>
            </ul>
        </div>
            
        <!--End-breadcrumbs-->
        <main>
            @hasSection('body')
            @yield('body')
            @endif
        </main>


        <cript src="js/excanvas.min.js"></script> 
        <script src="js/jquery.min.js"></script> 
        <script src="js/jquery.ui.custom.js"></script> 
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/jquery.flot.min.js"></script> 
        <script src="js/jquery.flot.resize.min.js"></script> 
        <script src="js/jquery.peity.min.js"></script> 
        <script src="js/fullcalendar.min.js"></script> 
        <script src="js/matrix.js"></script> 

        <!--script src="js/matrix.dashboard.js"></script> 
        <script src="js/jquery.gritter.min.js"></script> 
        <script src="js/matrix.interface.js"></script> 
        <script src="js/matrix.chat.js"></script> 
        <script src="js/jquery.validate.js"></script> 
        <script src="js/matrix.form_validation.js"></script> 
        <script src="js/jquery.wizard.js"></script> 
        <script src="js/jquery.uniform.js"></script> 
        <script src="js/select2.min.js"></script> 
        <script src="js/matrix.popover.js"></script> 
        <script src="js/jquery.dataTables.min.js"></script-->
        
        <script src="js/matrix.tables.js"></script>  
        <script src="js/jquery.validate.js"></script> 
        <script src="js/jquery.wizard.js"></script> 
        <script src="js/matrix.wizard.js"></script>    
        </body>
    </html>