<?php
	session_start();
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
	
	if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
		header("Location: generarLlaves.php");
	}
	if($_SESSION['tipo_usuario']!=1) { //Si tipo_usuario No es admin redirecciona a index.php
		header("Location: index.php");
	} 

	$consulta = "SELECT id, llave FROM llaves ";
	$resultado = $mysqli->query($consulta);
	$row_cnt = $resultado->num_rows;
	$row = $resultado->fetch_assoc();

	/*Subir llaves a la Base de datos*/
	function registraLlaves($cantidadLlaves,$llave){
		global $mysqli;
		
		$stmt = $mysqli->prepare("INSERT INTO llaves (id,llave) VALUES(?,?)");
		$stmt->bind_param('is', $cantidadLlaves,$llave);

			if ($stmt->execute()){
			return $mysqli->insert_id;
			} else {
			return 0;	
		}		
	}
	//Al Enviar el formulario ocurre todo esto
	if(!empty($_POST))
	{
		$cantidadLlaves = $mysqli->real_escape_string($_POST['cantidadLlaves']);
		$llave = $mysqli->real_escape_string($_POST['llave']);

		registraLlaves($cantidadLlaves,$llave);
	}

?>

<html>
	<head>
		<title>Crear Llaves</title>
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
			<nav class='navbar'>
				<div class='container-fluid'>

					<!--div class='navbar-header'>
						<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
							<span class='sr-only'>Men&uacute;</span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
						</button>
					</div-->

					<div id='nav' class=''>
						<ul class=''>
							<li><a href='bienvenida.php'>Inicio</a></li>
							<li><a href='posiciones.php'>Posiciones</a></li>
								<?php if($_SESSION["id_usuario"] == 1) { ?>
					               <li><a href='pollaAdmin.php'>Llenar los Partidos</a></li>
				             	<?php  }  else { ?>
					               <li><a href='polla.php'>Llenar la Polla</a></li>
				             	<?php  } ?>
							<li><a href='instrucciones.php'>Instrucciones</a></li>
						</ul>	

						<?php if($_SESSION['tipo_usuario']==1) { ?>
							<ul class=''>
								<li><a href='generarLlaves.php'>Administrar Usuarios</a></li>
							</ul>
						<?php } ?>
						
						<ul class=''>
							<li><a href='logout.php'>Cerrar Sesi&oacute;n</a></li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="jumbotron">
<script type="text/javascript">

function FX_passGenerator(id) {
  var thePass = "";
  
  var randomchar = "";
  
  var numberofdigits = Math.floor((Math.random() * 7) + 6);

  for (var count=1; count<=numberofdigits; count++) {

    var chargroup = Math.floor((Math.random() * 3) + 1);

    if (chargroup==1) {

      randomchar = Math.floor((Math.random() * 26) + 65);

    }

    if (chargroup==2) {

      randomchar = Math.floor((Math.random() * 10) + 48);

    }

    if (chargroup==3) {

      randomchar = Math.floor((Math.random() * 26) + 97);

    }

    thePass+=String.fromCharCode(randomchar);

  }

  document.getElementById(id).value=thePass;

}

			</script>

			<!--div id="generador">
		 <form action=""></form>
		 <input name="cantidadLlaves "type="text" size="15px" id="llave">
         <input name="llave" type="text" size="15px" id="llave" value="" />
         <a class="boton" onclick="FX_passGenerator('llave')">Generar</a>

        	 </div-->

        	 <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							<div class="form-group">
								<div class="col-md-1">
									<input type="text" class="form-control" name="cantidadLlaves" placeholder="id" value="<?php if(isset($cantidadLlaves)) echo $cantidadLlaves; ?>">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-3">
									<input type="text" id="llave" class="form-control" name="llave" placeholder="Llave" value="<?php if(isset($llave)) echo $llave; ?>">

									<a class="boton" onclick="FX_passGenerator('llave')">Generar</a>
								</div>
							</div>

							<div class="form-group">                                      
								<div class="col-md-offset-3 col-md-9">
									<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Subir a la Base de Datos</button> 
								</div>
							</div>
			</form>
				<?php

				//Verificar Cantidad de Filas
				$consulta = "SELECT id FROM llaves ";
				$resultado = $mysqli->query($consulta);
				$row_cnt = $resultado->num_rows;
				$row = $resultado->fetch_assoc();

				printf("La Base de Datos tiene %d filas.\n <br><br>	", $row_cnt);?>

				<?php 
				//$row_cnt es la cantidad de filas existentes
				//$i es el contador
				if (!$row_cnt) {
					echo "No se Encontraron registros";
				}
				for ($i=1; $i <= $row_cnt ; $i++) {
						$sql = "SELECT id, llave FROM llaves WHERE id=$i ";
						$result = $mysqli->query($sql);
						$llave = $result->fetch_assoc();
						echo '<br>Llave id #'.$llave['id']." es: ".$llave['llave'].'<br>';
				}
				?>
				<br />
			</div>
		</div>
	</body>
</html>