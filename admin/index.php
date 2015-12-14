<?PHP 
ob_start();
session_start();
if(isset($_SESSION['usuarioAdministrador']) && (isset($_SESSION['senhaAdministrador']))){
    header("Location: home.php"); exit;
}

    include('conexao/conecta.php');
    
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Login - Italo Freitas</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/pages/signin.css" rel="stylesheet" type="text/css">
    
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.php">
				Intranet			
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="lembrar-me.html" class="">
							Esqueceu sua senha?
						</a>
						
					</li>
					
					<li class="">						
						<a href="../index.html" class="">
							<i class="icon-chevron-left"></i>
							Acessar o site
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
    <?PHP 
        if(isset($_POST['logar'])){
        //RECUPERAR DADOS
        $usuario = trim(strip_tags($_POST['usuario']));
        $senha = trim(strip_tags($_POST['senha']));
    
        //SELECIONAR BANCO DE DADOS
        $select = "SELECT * from login WHERE usuario=:usuario AND senha=:senha";
        
        try{
            $result = $conexao->prepare($select);
            $result->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $result->bindParam(':senha', $senha, PDO::PARAM_STR);
            $result->execute();
            $contar = $result->rowCount();
            if($contar>0){
                $usuario = ['usuario'];
                $senha = $_POST['senha'];
                $_SESSION['usuarioAdministrador'] = $usuario;
                $_SESSION['senhaAdministrador'] = $senha;
                echo '<div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Sucesso!</strong> Usuário logado com sucesso no sistema.
                    </div>';                
                
                header("Refresh: 3, home.php"); 
            }else{
                echo '<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Erro ao logar!</strong> Os dados não batem.
                    </div>';                
                            }
            
        }catch(PDOException $e){
            echo $e;
        }
    
    }//SE CLICAR NO BOTÃO ENTRAR NO SISTEMA
    ?>
	
	<div class="content clearfix">
		
		<form action="#" method="post">
		
			<h1>Faça seu Login</h1>		
			
			<div class="login-fields">
				
				<p>Entre com seus dados:</p>
				
				<div class="field">
					<label for="username">Usuário</label>
					<input type="text" id="username" name="usuario" value="" placeholder="Usuário" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Senha:</label>
					<input type="password" id="password" name="senha" value="" placeholder="Senha" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				<input type="submit" name="logar" value="Entrar no Sistema" class="button btn btn-primary btn-large">
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script src="js/signin.js"></script>

</body>

</html>
