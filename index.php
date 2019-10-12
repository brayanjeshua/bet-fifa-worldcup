<?php
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
	
	session_start(); //Iniciar una nueva sesión o reanudar la existente
	
	if(isset($_SESSION["id_usuario"])){ //En caso de existir la sesión redireccionamos
		header("Location: bienvenida.php");
	}
	
	$errors = array();
	
	if(!empty($_POST))
	{
		$usuario = $mysqli->real_escape_string($_POST['usuario']);
		$password = $mysqli->real_escape_string($_POST['password']);
		
		if(isNullLogin($usuario, $password))
		{
			$errors[] = "Debe llenar todos los campos";
		}
		
		$errors[] = login($usuario, $password);	
	}
?>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="css/estilos.css">
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		<!--link rel="stylesheet" href="css/bootstrap-theme.min.css"-->
		
		
	</head>
	
	<body>
		
		<div class="container">    
			<div id="" >                    
				<div class="login panel-info" >   
					<!---Espaciado-->
					<div style="background:none;" class="panel-body">
						
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
						<form id="loginform" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
							
							<div class="input-group">
								<input autofocus="" size="100%" id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="usuario" required><!--span class="input-group-addon"><img src="img/usuario.png"></img></span-->                                  
							</div>
							
							<div class="input-group">
								<input size="100%" id="password" type="password" class="form-control pass" name="password" placeholder="password" required><!--span class="input-group-addon"><img src="img/clave.png"></img></span-->
							</div>
							<div class="loginOpc">
								<p style="color:fff; display:inline; font-size:0.8em;">Recordarme</p>
								<input type="checkbox">
								 <button class="EntrarLogin" type="submit">Entrar&nbsp<span><img width="12" height="14" src="img/play.png" alt=""></span></button>
							</div>
							
							<div>
								<br>
								<div class="col-md-12 control">
									<div class="text-center opc">
										<a style="color:fff;" href="registro.php"><p>Registrarme</a>&nbsp&nbsp&nbsp
										<a style="color:fff;" href="recupera.php">Recuperar Contraseña</p></a>
									</div>
								</div>
							</div>    
						</form>
						<?php echo resultBlock($errors); ?>
					</div>                     
				</div>  
			</div>
		</div>
	</body>
</html>