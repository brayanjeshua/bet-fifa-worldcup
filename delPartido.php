<?php
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';

	  $id_partido  = $_GET['idPartido'];
	  
       
		$stmt = $mysqli->prepare("DELETE FROM partidos WHERE idPartidos = ? ");
		$stmt->bind_param('i', $id_partido);
		$result = $stmt->execute();
		$stmt->close();
		

		header('location:pollaAdmin.php')
 
?>