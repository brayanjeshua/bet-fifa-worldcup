<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	
	$errors = array();
	//Al Enviar el formulario ocurre todo esto
	if(!empty($_POST))
	{
		$nombre = $mysqli->real_escape_string($_POST['nombre']);	
		$usuario = $mysqli->real_escape_string($_POST['usuario']);	
		$password = $mysqli->real_escape_string($_POST['password']);	
		$con_password = $mysqli->real_escape_string($_POST['con_password']);	
		$email = $mysqli->real_escape_string($_POST['email']);	
		

		$pin = $mysqli->real_escape_string($_POST['pin']);
		$cc = $mysqli->real_escape_string($_POST['cc']);
		$celular = $mysqli->real_escape_string($_POST['celular']);
		$referido = $mysqli->real_escape_string($_POST['referido']);


		$activo = 0;
		
		//El tipo usuario 1 es administrador el 2 es Usuario Normal
		$tipo_usuario = 2;

		$sql = "SELECT id, llave FROM llaves WHERE id ='1' ";
		$result = $mysqli->query($sql);
		$llave = $result->fetch_assoc();
		$exitoLlave = 0;

				//Verificar Cantidad de Filas
				$consulta = "SELECT id FROM llaves ";
				$resultado = $mysqli->query($consulta);
				$row_cnt = $resultado->num_rows;
				$row = $resultado->fetch_assoc();

				//printf("La Base de Datos tiene %d filas.\n", $row_cnt);

				for ($i=1; $i <= $row_cnt; $i++) {
						$sql = "SELECT llave FROM llaves WHERE id=$i ";
						$result = $mysqli->query($sql);
						$llave = $result->fetch_assoc();
						if($pin == $llave['llave']){
							$exitoLlave = 1;
							$idLlave = $i;
						}
				}

		//Borrar Llave de la Base de Datos
		if ($exitoLlave == 1) {
			$sql = "DELETE FROM llaves WHERE id=$idLlave";
			$mysqli->query($sql);
		}

		//Validaciones
		if ($exitoLlave != 1) {
			$errors[] = "Valor de la Llave es incorrecto";
		}

		if(isNull($nombre, $usuario, $password, $con_password, $email, $pin, $cc, $celular, $referido))
		{
			$errors[] = "Debe llenar todos los campos";
		}
		
		if(!isEmail($email))
		{
			$errors[] = "Dirección de correo inválida";
		}
		
		if(!validaPassword($password, $con_password))
		{
			$errors[] = "Las contraseñas no coinciden";
		}
		
		if(usuarioExiste($usuario))
		{
			$errors[] = "El nombre de usuario $usuario ya existe";
		}
		
		if(emailExiste($email))
		{
			$errors[] = "El correo electronico $email ya existe";
		}
		if(count($errors) == 0)
		{
				$pass_hash = hashPassword($password);
				$token = generateToken();
				
				$registro = registraUsuario($usuario, $pass_hash, $nombre, $email, $activo, $token, $tipo_usuario, $pin, $cc, $celular, $referido);
				
				if($registro > 0 )
				{
					
					$url = 'http://'.$_SERVER["SERVER_NAME"].'/pollaFinal/activar.php?id='.$registro.'&val='.$token;
					
					$asunto = 'Activar Cuenta - Sistema de Usuarios';
					$cuerpo = "Estimado $nombre: <br /><br />Para continuar con el proceso de registro, es indispensable de click en la siguiente liga <a href='$url'>Activar Cuenta</a>";
					
					if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
					
					echo "Para terminar el proceso de registro siga las instrucciones que le hemos enviado la direccion de correo electronico: $email";
					
					echo "<br><a href='index.php' >Iniciar Sesion</a>";
					exit;
					
					} else {
						$errors[] = "Error al enviar Email";
					}
					
					} else {
					$errors[] = "Error al Registrar";
				}
			
		}
		
	}
	
?>
<html>
	<head>
		<title>Registro</title>
		<link rel="stylesheet" href="css/estilos.css">
		<!--link rel="stylesheet" href="css/bootstrap-theme.min.css"-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/bootstrap.min.js" ></script>

	</head>
	
	<body>
		<div class="container centrar">
			<div id="signupbox" style="margin-top:50px" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="registro panel-info">
					
					<div class="panel-body panel-registro">
						
						<form id="signupform" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>
							<br><br>
							<div class="form-group">
								<div class="col-md-12">
									<input type="text" class="form-control" name="pin" placeholder="Numero de Pin" value="<?php if(isset($pin)) echo $pin; ?>" autofocus="">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<input type="text" class="form-control" name="cc" placeholder="Cedula de Ciudadania" value="<?php if(isset($cc)) echo $cc; ?>">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<input type="text" class="form-control" name="celular" placeholder="Celular" value="<?php if(isset($celular)) echo $celular; ?>">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<input type="text" class="form-control" name="referido" placeholder="Referido Por" value="<?php if(isset($usuario)) echo $usuario; ?>">
								</div>
							</div>

							<div class="form-group">
								<!--label for="nombre" class="col-md-3 control-label">Nombre:</label-->
								<div class="col-md-12">
									<input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(isset($nombre)) echo $nombre; ?>" required >
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-12">
									<input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if(isset($usuario)) echo $usuario; ?>" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<input type="password" class="form-control" name="password" placeholder="Contraseña" required>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-12">
									<input type="password" class="form-control" name="con_password" placeholder="Confirmar Contraseña" required>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-12">
									<input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($email)) echo $email; ?>" required>
								</div>
							</div>

							<div class="form-group">                                      
								<div class="botRegistro">
									<button class="Entrar" type="submit">Registrarme&nbsp<span><img src="img/play.png" alt=""></span></button>
									<a href="index.php" class="Entrar">Iniciar Sesion&nbsp<span><img src="img/play.png" alt=""></span></a>
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