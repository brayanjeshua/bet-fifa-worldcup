<?php
	session_start();
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
	
	if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
		header("Location: index.php");
	}
	if($_SESSION['tipo_usuario']!=1) { //Si tipo_usuario No es admin redirecciona a index.php
		header("Location: index.php");
	} 
	$idUsuario = $_SESSION['id_usuario'];

	$sql = "SELECT * FROM partidos ";
	$result = $mysqli->query($sql);
	while ($row = mysqli_fetch_assoc($result)){
	    $item[] = $row;
	}
	
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
            <ul>
              
              <li><a href='instrucciones.php'>Instrucciones</a></li>
              <li><a href='calendario.php'>Calendario</a></li>
              <li><a href='bienvenida.php'>Inicio</a></li>
                <?php if($_SESSION["id_usuario"] == 1) { ?>
                         <li><a href='pollaAdmin.php'>Llenar los Partidos</a></li>
                      <?php  }  else { ?>
                         <li><a href='polla.php'>Llenar la Polla</a></li>
                      <?php  } ?>
              <li><a href='posiciones.php'>Posiciones</a></li>

            </ul>
            <?php if($_SESSION['tipo_usuario']==1) { ?>
              <ul class=''>
                <li><a href='generarLlaves.php'>Administrar Usuarios</a></li>
              </ul>
            <?php } ?>
            
            <ul class=''>
            </ul>
          </div>
        </div>
      </nav>
			
	

<div class="jumbotron table-responsive">
<?php if($_SESSION['tipo_usuario']==1) { ?>
<div class="container">
 <div class="row">
  <div class="col-xs-12 text-center">
  
  <a class="btn btn-success btn-lg" href="aggPartido.php" role="button">Agregar</a>

  </div>
 </div>
</div>
<?php } ?>


    <u><h3 class="text-center "><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Administrador- Colocar Resultados De Los Partidos</h3></u>
  <table class="table table-bordered">
    <tr class="text-center">
	<th>N° PARTIDO</th>
	<th>EQUIPO 1</th>
	<th>EQUIPO 2</th>
	<th>FECHA</th>
	<th>RESULTADO </th>
	<?php if($_SESSION['tipo_usuario']==2) { ?>	<th>APOSTAR</th> <?php } ?>
	<?php if($_SESSION['tipo_usuario']==1) { ?>	<th>ACCION</th> <?php } ?>
	</tr>

 <?php 

foreach($item as $filas) {

?>

  <tr class="text-center">
	   <td ><?php echo $filas['idPartidos'] ?></td>
	   <td ><?php echo $filas['equipo1'] ?></td>
	   <td ><?php echo $filas['equipo2'] ?></td>
	   <td ><?php echo $filas['fecha'] ?></td>
	   
<?php
//SI ES USUARIO TIPÓ 1 me permite escoger el resultado del partido...
if($_SESSION['tipo_usuario']== 1) { 



?>
<td class="text-center">
 <form action="aggResultado.php" method="POST">
 
   <select name="resultado">
	       <?php

            if($filas['resultado'] == '') {
                 echo "<option value=''selected>VACIO</option>"; 
              } else {       
				echo "<option value=''>VACIO</option>"; 
			 } 
		   if($filas['resultado'] == 1) {
				echo "<option value='1'selected>GANO EQUIPO 1</option>"; 
			 } else {       
			   echo "<option value='1'>GANO EQUIPO 1</option>"; 
			} 
			if($filas['resultado'] == 2) {
				echo "<option value='2'selected>GANO EQUIPO 2</option>"; 
			 } else {       
			   echo "<option value='2'>GANO EQUIPO 2</option>"; 
			} 
			if($filas['resultado'] == 3) {
				echo "<option value='3'selected>FUE EMPATE</option>"; 
			 } else {       
			   echo "<option value='3'>FUE EMPATE</option>"; 
			} 
                  
          ?>
   </select>
   <br>
  
   <input type="hidden" name="id_partido" value="<?php echo $filas["idPartidos"] ?>">
   <button class="btn btn-info btn-md" type="submit">Guardar</button>
</form>
   </td>
 
   <td class="text-center"><a class="btn btn-danger btn-md" href="delPartido.php?idPartido=<?php echo $filas["idPartidos"] ?>" role="button">Eliminar</a></td>
</tr> 
<?php 
} //CIERRE IF DE SESSION USUARIO TIPO 1

?>


<?php

//-------SI ES USUARIO TIPÓ 2 ME MUESTRA EL SELECT PARA ESCOGER APUESTA...-------------------------
  if($_SESSION['tipo_usuario']== 2) { 

?>


<td class="text-center">
  
	       <?php
//primero le asigno un string A LA VARIABLE

if($filas['resultado'] == '') 
echo"SIN RESULTADO"; 
elseif($filas['resultado'] == 1)        
echo "GANO EQUIPO 1"; 
elseif($filas['resultado'] == 2)        
echo "GANO EQUIPO 2";
elseif($filas['resultado'] == 3)        
echo "FUE EMPATE";

          ?>
   </td>

<?php	  

 //convierto en formato UNIX FECHA para hacer la comparacion fecha de hoy con la 
 //de los partidos
 $fecha_hoy = strtotime(date("Y-m-d"));
 $fecha_partidos = strtotime($filas['fecha']);   


//CONSULTA PARA VERIFICAR QUE OPCION SELECCIONO EL USUARIO EN SU APUESTA...
 $idPartidos=$filas['idPartidos'];
$sql2 = "SELECT apuesta FROM pollas WHERE id= '$idUsuario' AND idPartidos ='$idPartidos' ";
$result2 = $mysqli->query($sql2);
$comprobar=mysqli_num_rows($result2);

  if($comprobar > 0) {
    while ($row2 = mysqli_fetch_assoc($result2))
	  $apuesta = $row2['apuesta'];
  } else {
	  $apuesta = 0;
  }
	  //SI APUESTA ES CERO PERMITEME ELEGIR, SI ES NUMERO MAYOR ES QUE YA SELECCIONO ALGUNA OPCION
	if($apuesta == 0){

		if($fecha_partidos > $fecha_hoy)
		{
	   
?>

 <td class="text-center">
   <form action="procesarApuesta.php" method="POST">
	 <select name="apuesta">
	    <option value="4">NO PARTICIPAR</option>
		<option value="1">EQUIPO 1</option>
		<option value="2">EQUIPO 2</option>
		<option value="3">EMPATE</option>
	 </select>
	 <br>
	 <button class="btn btn-info btn-md" type="submit">Guardar</button>
	 <input type="hidden" name="id_partido" value="<?php echo $filas["idPartidos"] ?>">
	 </form>
	 </td>

	<?php } else { echo "<td> YA VENCIO </td>"; } 
	} else {  	 
		  if($apuesta == '1' )  
		   echo "<td> APOSTO POR 'EQUIPO 1 </td>";
		  elseif($apuesta == '2' )
		  echo "<td> APOSTO POR EQUIPO 2 </td>";
		  elseif($apuesta == '3' )  
		  echo "<td> APOSTO POR EMPATE </td>";
		  elseif($apuesta == '4' )  
		  echo "<td> NO PARTICIPA </td>";
	}

	 ?>
	 
</tr> 
<?php 
 } //CIERRE IF DE SESSION USUARIO TIPO 2


} //CIERRE DEL BUCLE DE REPETICION PARA IMPRIMIR EL ARREGLO ITEMS
 ?>

  </table>
</div>

		</div>
	</body>
</html>