<?php
	session_start();
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';

	if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
		header("Location: index.php");
	}
	if($_SESSION['tipo_usuario']!=1) { //Si tipo_usuario No es admin redirecciona a index.php
		header("Location: index.php");
	} 

	//Al Enviar el formulario ocurre todo esto
	if(!empty($_POST))
	{
		$idPartidos = $mysqli->real_escape_string($_POST['idPartidos']);
		$equipo1 = $mysqli->real_escape_string($_POST['equipo1']);
		$equipo2 = $mysqli->real_escape_string($_POST['equipo2']);
		$fecha = $mysqli->real_escape_string($_POST['fecha']);
	    $faseRonda = $mysqli->real_escape_string($_POST['faseRonda']);

	$registro = registraPartido($idPartidos,$equipo1,$equipo2,$fecha,$faseRonda);
				
				if($registro > 0 ) {
					echo "Partido Registrado";
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
							<br><br>
							<div class="form-group">
								<div class="col-md-12">
									<input type="text" class="form-control" name="idPartidos" placeholder="Id Partido" value="<?php if(isset($idPartidos)) echo $idPartidos; ?>" autofocus="">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<input type="text" class="form-control" name="equipo1" placeholder="Equipo1" value="<?php if(isset($equipo1)) echo $equipo1; ?>">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<input type="text" class="form-control" name="equipo2" placeholder="Equipo2" value="<?php if(isset($equipo2)) echo $equipo2; ?>">
								</div>
							</div>
							
						<div class="form-group">
								<div class="col-md-12">
									<input type="text" class="form-control" name="faseRonda" placeholder="Ronda a la que pertenece" value="<?php if(isset($faseRonda)) echo $faseRonda; ?>">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-6">
									<input type="date" class="form-control" name="fecha" value="<?php if(isset($fecha)) echo $fecha; ?>">
								</div>
							</div>
						  

							<div class="form-group">                                      
								<div class="text-center">
									<button class="Entrar" type="submit">Enviar Partido<span><img src="img/play.png" alt=""></span></button>
									<br><br>
									<a href="pollaAdmin.php" class="Entrar">Volver a inicio<span><img src="img/play.png" alt=""></span></a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>