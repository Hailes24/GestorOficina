
<!DOCTYPE html>
    <html lang="en">

    <meta charset="UTF-8" />  
    <head>
        <title>Sistema De Gestão de oficins e Peça</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link rel="stylesheet" href="css/matrix-media.css" />
        <link rel="stylesheet" href="css/matrix-style.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="control-group normal_text"> <h3>Sistema de Gestão De Oficina e Peça</h3></div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                
                    </div>
                </div>
            </div>
            <!-- Password -->
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span> <input id="password" type="password" placeholder="Palavra Passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                         
                    </div>
                </div>
            </div>

            <div class="form-actions">                    
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Esqueceste a tua palavra Passe?</a></span>
                    <span class="pull-right"><a class="flip-link btn btn-info" href="{{ route('register') }}"> Cadastrar</a></span>
                    <span class="pull-right"> <button type="submit" class="btn btn-success">
                        {{ __('Entrar') }}
                    </button></span>                   
                </div>

            </form>
            <form id="recoverform" action="#" class="form-vertical">
                @csrf
				<p class="normal_text">Digite o seu email e nós daremos instruções de como repor a sua palavra passe.</p>
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="email" placeholder="E-mail address" />
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>  
        </div>
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>
</html>