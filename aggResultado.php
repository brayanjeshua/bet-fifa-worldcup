<?php
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';

		$id_partido  = $_POST['id_partido'];
		$resultado  = $_POST['resultado'];
  echo "$id_partido $resultado";
       
		$stmt = $mysqli->prepare("UPDATE partidos SET resultado = ? WHERE idPartidos = ? ");
		$stmt->bind_param('ii',$resultado, $id_partido);
		$result = $stmt->execute();
		$stmt->close();
		

		header('location:pollaAdmin.php')
 
?>