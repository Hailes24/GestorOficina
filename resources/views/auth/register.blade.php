
<DOCTYPE html>
<html lang="en">
    
<head>
        <title>Sistema De Gestão de Oficina e Peça</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!--link rel="stylesheet" href="css/bootstrap-responsive.min.css" /-->
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<!--link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'-->

    </head>
    <body>
        
        <div id="loginbox">   
            <div class="control-group normal_text"> <h4>Sistema de Gestão De Oficina e Peça</h4></div>         
            <form method="POST" action="{{ route('register') }}" id="loginform" class="form-vertical">
                @csrf
			
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input id="name" type="text"  placeholder="Digite o seu nome" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus required>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input id="email" type="email"  placeholder="Digite o seu email" name="email" value="{{ old('email') }}"  autocomplete="name" autofocus required>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input id="profissao" type="text"  placeholder="Profissão" name="profissao" value="{{ old('profissao') }}"  list="tcidade"  autocomplete="profissao" autofocus required>
                            <datalist id="tcidade">
                                <option value="Mecanico"></option>
                                <option value="Gerente"></option>
                                <option value="Recepcionista"></option>
                                <option value="Linpesa"></option>
                            </datalist>
                        </div>
                    </div>
                </div>
               
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input name='telefone' type="text"  placeholder="Número do telefone"  autocomplete="telefone" autofocus required>
                                
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class=""><i class=""> </i></span><input  name='foto' type="file"  placeholder=""  autocomplete="foto" autofocus required>
                            
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg">$</span><input  type="text"  placeholder="salario" name="salario" value="{{ old('salario') }}"  list="salario" autocomplete="salario" autofocus required>
                            <datalist id="salario">
                                <option value="20000"></option>
                                <option value="100000"></option>
                                <option value="90000"></option>
                            </datalist>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <label class="control-label">Data de Nascimento</label><span class="add-on bg_ly"><i class="icon-lock"></i></span><input id="dataNasc" type="date" class="form-control" placeholder="Data de Nascimento" name="dataNasc" autocomplete="new-password">
                        </div>
                        <!--div class="main_input_box">
                            <span class="add-on bg_ly"></span> <input type="date" name="dataNasc" class="form-control" id="dataNasc">
                        </div-->
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input id="password" type="password" class="form-control" placeholder="Password" name="password" autocomplete="new-password">
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation"  autocomplete="new-password">
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a class="flip-link btn btn-info" href="{{ url('/') }}">Sair</a></span>
                    <span class="pull-right"> <!--a type="submit" href="index.html" class="btn btn-success" /> Cadastrar</a-->
                        <button type="submit" class="btn btn-success">
                            {{ __('Cadastrar') }}
                        </button>
                         </div>
                
                    </span>
                </div>
            </form>
           
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>
