<?php
	session_start();
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
	
	if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
		header("Location: index.php");
	}
	
	$idUsuario = $_SESSION['id_usuario'];
	
	$sql = "SELECT id, nombre FROM usuarios WHERE id = '$idUsuario'";
	$result = $mysqli->query($sql);
	$nombre = $result->fetch_assoc();

	$sql = "SELECT id, pin FROM usuarios WHERE id = '$idUsuario'";
	$result = $mysqli->query($sql);
	$row = $result->fetch_assoc();
?>

<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>

		<link rel="stylesheet" href="css/estilos.css">
		
		<style>
			body {
			padding-top: 20px;
			padding-bottom: 20px;
			}
		</style>
	</head>
	
	<body>
		<div class="container">
			
			<nav class='navbar navbar-default'>
				<div class='container-fluid'>
					<div class='navbar-header'>
						<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
							<span class='sr-only'>Men&uacute;</span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
						</button>
					</div>
					<div id='navbar' class='navbar-collapse collapse'>
						<ul class='nav navbar-nav'>
						<li class='active'><a href='welcome.php'>Inicio</a></li>
							<li class='active'><a href='posiciones.php'>Posiciones</a></li>
								<?php	if($_SESSION["id_usuario"] == 1) { ?>
					               <li class='active'><a href='pollaAdmin.php'>Llenar la Polla</a></li>
				             	<?php  }  else { ?>
					               <li class='active'><a href='polla.php'>Llenar la Polla</a></li>
				             	<?php  } ?>
							
							<li class='active'><a href='instruccion.php'>Instrucciones</a></li>



						</ul>
						
						<?php if($_SESSION['tipo_usuario']==1) { ?>
							<ul class='nav navbar-nav'>
								<li><a href='generarLlaves.php'>Administrar Usuarios</a></li>
							</ul>
						<?php } ?>
						
						<ul class='nav navbar-nav navbar-right'>
							<li><a href='logout.php'>Cerrar Sesi&oacute;n</a></li>
						</ul>
					</div>
				</div>
			</nav>	
			
			<div class="jumbotron">
				<h2><?php echo 'Hola '.utf8_decode($nombre['nombre']).' tu pin es '.($row['pin']); ?></h1>
				<br />
			</div>
		</div>
	</body>
</html>