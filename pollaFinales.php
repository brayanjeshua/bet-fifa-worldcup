<?php
	session_start();
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
	
	if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
		header("Location: index.php");
	}
	
	$idUsuario = $_SESSION['id_usuario'];

$sql = "SELECT * FROM partidos WHERE faseRonda > 3";
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
			
	

<div class="jumbotron table-responsive">



 <u><h3 class="text-center "><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>CLASIFICATORIAS</h3></u>
  <table class="table table-bordered">
  

 <?php 
$i=1;
$acum=1;
$previo = NULL;
foreach($item as $filas) {

?>

 

  <?php if($filas['faseRonda'] !== $previo ) {  

     
  ?>       
	<?php   if($filas['faseRonda'] == 4 ) { ?>
    <tr >
	<th class="text-center" colspan="5">OCTAVOS DE FINAL</th>
    </tr>
	<?php }elseif($filas['faseRonda'] == 5){
     ?>
	<tr >
	<th class="text-center" colspan="5">CUARTOS DE FINAL</th>
    </tr>
	<?php }elseif($filas['faseRonda'] == 6){
     ?>
	<tr >
	<th class="text-center" colspan="5"> SEMIFINAL</th>
    </tr>
	<?php }elseif($filas['faseRonda'] == 7){
     ?>
	<tr >
	<th class="text-center" colspan="5"> PARTIDO POR EL TERCER LUGAR</th>
    </tr>
	<?php }elseif($filas['faseRonda'] == 8){
     ?>
	<tr >
	<th class="text-center" colspan="5"> FINAL</th>
    </tr>
 <?php

	} 
	
	?>

  <tr class="text-center">
  <th class="text-center">EQUIPO 1</th>
  <th class="text-center">EQUIPO 2</th>
  <th class="text-center">FECHA </th>
  <th class="text-center">RESULTADOS </th>
  <th class="text-center">APUESTA</th>
  </tr>
		 

<?php

	 
  $previo = $filas['faseRonda']; 
} 
?>

  <tr class="text-center">

	   <td ><?php echo $filas['equipo1'] ?></td>
	   <td ><?php echo $filas['equipo2'] ?></td>
	   <td ><?php echo $filas['fecha'] ?></td>
	

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
     <form action="procesarApuestaFinal.php" method="POST" id="myform" onsubmit="return enviar();">
	 <select name="apuesta">
	    <option value="4">NO PARTICIPAR</option>
		<option value="1">EQUIPO 1</option>
		<option value="2">EQUIPO 2</option>
		<!-- No se puede empate! option value="3">EMPATE</option-->
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

} //CIERRE DEL BUCLE DE REPETICION PARA IMPRIMIR EL ARREGLO ITEMS
 ?>



 <center><a class="btn btn-warning btn-md" href="polla.php" >VOLVER</a></center>
 <br>

  </table>
</div>

		</div>
				<script>
function enviar(event) {


var formulario = document.getElementById("myform");
var r = confirm("Advertencia! Desea Realizar su apuesta?");

if (r == true) {
formulario.submit();
} else {
return false;
}
}

</script>

	</body>
</html>