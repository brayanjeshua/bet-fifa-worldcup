<?php
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
	
	session_start();

	   $idUsuario = $_SESSION["id_usuario"];
	   
	
	   
	   foreach ($_POST as $clave => $valor) {
      $array[] = $valor;
    }
	$apuestas = array_chunk($array, 2);


	 foreach($apuestas as $item){
		 
	 for($i=0;$i<count($item);$i++){
		
		   if($i == 1){  
		$stmt = $mysqli->prepare("INSERT INTO pollas (idPartidos,id, apuesta) VALUES (?,?,?)");
		$stmt->bind_param('iii',$item[$i],$idUsuario, $id_partido);
		$result = $stmt->execute();
		$stmt->close();			   
		   }
		   $id_partido = $item[$i];
		
	 }
	 
}
?>

<script>
    alert('APUESTA REALIZADA EXITOSAMENTE');
    location.href='pollaFinales.php';
	

</script>

