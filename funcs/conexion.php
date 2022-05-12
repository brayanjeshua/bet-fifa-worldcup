<?php

	$mysqli=new mysqli("localhost:3306","pollera_user","!Ah4i4d5","pollera"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>
